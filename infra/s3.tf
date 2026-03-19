# Reference the existing S3 bucket (not managed by Terraform - already exists)
data "aws_s3_bucket" "site" {
  bucket = var.s3_bucket_name
}

# Allow CloudFront OAC to read from the bucket
# This replaces any existing public-read policy since OAC is the only needed access
resource "aws_s3_bucket_policy" "site" {
  bucket = data.aws_s3_bucket.site.id

  policy = jsonencode({
    Version = "2012-10-17"
    Statement = [
      {
        Sid    = "AllowCloudFrontOAC"
        Effect = "Allow"
        Principal = {
          Service = "cloudfront.amazonaws.com"
        }
        Action   = "s3:GetObject"
        Resource = "${data.aws_s3_bucket.site.arn}/*"
        Condition = {
          StringEquals = {
            "AWS:SourceArn" = aws_cloudfront_distribution.site.arn
          }
        }
      }
    ]
  })
}
