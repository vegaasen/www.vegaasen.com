<img src="src/i/vaa.webp" width="400" alt="Vegard Aasen" align="left">
<br/>
<br/>
<br/>
<br/>
<h1 align="center" style="border-bottom-width: 0"><a href="https://www.vegaasen.com">www.vegaasen.com</a> <small>(v9)</small></h1>

<p align="center">
  <a href="https://www.vegaasen.com"><img src="https://img.shields.io/badge/Live%20Site-vegaasen.com-black?style=flat-square&logo=amazon-cloudfront&logoColor=white" alt="Live site"/></a>
  <img src="https://github.com/vegaasen/www.vegaasen.com/actions/workflows/build.yml/badge.svg?event=push&label=Build" alt="Build status"/>
  <img src="https://github.com/vegaasen/www.vegaasen.com/actions/workflows/build.yml/badge.svg?event=push&label=Deploy&job=deploy" alt="Deploy status"/>
  <img src="https://img.shields.io/badge/license-Apache%202-blue?style=flat-square" alt="License: Apache 2"/>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Tailwind%20CSS-v4-38BDF8?style=flat-square&logo=tailwindcss&logoColor=white" alt="Tailwind CSS v4"/>
  <img src="https://img.shields.io/badge/HTML5-plain-E34F26?style=flat-square&logo=html5&logoColor=white" alt="HTML5"/>
  <img src="https://img.shields.io/badge/Node.js-LTS-5FA04E?style=flat-square&logo=nodedotjs&logoColor=white" alt="Node.js LTS"/>
  <img src="https://img.shields.io/badge/Amazon%20S3-hosted-FF9900?style=flat-square&logo=amazons3&logoColor=white" alt="Amazon S3"/>
  <img src="https://img.shields.io/badge/CloudFront-CDN-FF9900?style=flat-square&logo=amazonaws&logoColor=white" alt="Amazon CloudFront"/>
</p>

<p align="center">
  <sub>Last deployed: <!-- LAST_DEPLOYED --> 2026-03-19 22:03 UTC
</p>

<br/>
<br/>
<br/>

---

# 👋 Introduction

🤠 Howdy!

This repository holds everything for [Vegard Aasen's site](https://www.vegaasen.com). This is sort of dynamic and is never actually finished.

The site may be created with new and fancy tech, or it may be just über-static with content slabbed straight in. Depends on the mood and the version 💥.

## 🥞 Tech stack

| Technology | Purpose |
|---|---|
| [Tailwind CSS v4](https://tailwindcss.com) | Styling |
| Plain HTML5 | Markup |
| [Node.js](https://nodejs.org) | Build scripts |
| [SVGO](https://github.com/svg/svgo) | SVG optimisation |
| [Squoosh](https://squoosh.app) | Image optimisation |
| [Amazon S3](https://aws.amazon.com/s3/) | Static hosting (`eu-north-1`) |
| [Amazon CloudFront](https://aws.amazon.com/cloudfront/) | CDN + TLS certificates |
| [GitHub Actions](https://github.com/features/actions) | CI/CD |

---

# 🛠️ Develop

## Run

```bash
npm run dev
```

Then open `src/index.html` in any browser 💥.

## Build

```bash
npm run build
```

Output lands in `./build/` — that's what gets deployed to S3.

---

# 🚀 Deployment

Deployments are fully automated via GitHub Actions on push to `master`:

1. **Build job** — installs deps, compiles Tailwind, minifies HTML, produces `./build/`
2. **Deploy job** — syncs `./build/` to S3, invalidates CloudFront, updates the "last deployed" timestamp above

AWS credentials are stored as GitHub Actions secrets (`AWS_S3_BUCKET`, `AWS_ACCESS_KEY_ID`, `AWS_SECRET_ACCESS_KEY`, `CLOUDFRONT_DISTRIBUTION_ID`).

---

# #isitfinishedyet?

no.

---

# 📋 Version history

| Version | Date | Notes |
|---|---|---|
| v9 | 02.04.2024 | Tailwind CSS v4, plain HTML, S3 + CloudFront setup |
| v8 | 14.09.2020 | Previous iteration |
