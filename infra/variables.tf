variable "aws_region" {
  description = "Primary AWS region (where the S3 bucket lives)"
  type        = string
  default     = "eu-north-1"
}

variable "domain_name" {
  description = "Root domain name (e.g. vegaasen.com)"
  type        = string
  default     = "vegaasen.com"
}

variable "s3_bucket_name" {
  description = "Name of the existing S3 bucket used for site hosting"
  type        = string
  # Set this in terraform.tfvars or via TF_VAR_s3_bucket_name env var
}

variable "route53_zone_id" {
  description = "Route 53 hosted zone ID for the domain"
  type        = string
  # Set this in terraform.tfvars or via TF_VAR_route53_zone_id env var
}

variable "cloudfront_price_class" {
  description = "CloudFront price class - PriceClass_100 covers EU + North America (cheapest)"
  type        = string
  default     = "PriceClass_100"
}
