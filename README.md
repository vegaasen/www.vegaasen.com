# vegaasen.com v6

# Build status

[![Build Status](https://travis-ci.org/vegaasen/vegaasen_com_version6.svg?branch=VEG-001-redesign-no-angular)](https://travis-ci.org/vegaasen/vegaasen_com_version6)

# Introduction

This project represents the v6 of my own pages. 


# Build / Distribute

Everything within this project is build using the following techies:

* Gulp
* Npm

## Building the application

First off run the following command in order to assemble all dependencies required for the project from npm (npm packages)

    npm install

After this, run the following command in order to perform various gulp-tasks:

    gulp

This executes the default task defined within the gulpfile.js. For more tasks refer to that file :-).

You may also use the built in webserver (gulp-webserver) by issuing:

    gulp webServer

## Building a release-version of the application

Issue the following command to build a proper release-variant of the application:

    gulp build --env release

## Bulding using TravisCI

(blablabla)

Important in regards to the ssh private key:

* \n must be escaped with \\n
* " " must be escaped with "\ "

### Required properties

These properties are required in the travis configuration in order to work properly

* SSH_DEPLOYMENT_KEY ==> ---BEGIN---2312asdsad---END---
    * Important: Read the ssh private key note above
* SSH_DEPLPOYMENT_LOCATION ==> /my/deployment/location
* SSH_HOST_IP ==> ssh.somewhere.com
* SSH_HOST_USER_USERNAME ==> username

# Todos

Notions: 
* [v] == done
* [] == not done 

The lot: 
* [] Convert all `<img/>`-tags to use CSS instead (unless it makes sense in a SEOish way)
* [v] Convert to use uglifier/minifier of the following content:
    * [v] HTML
    * [v] JS
    * [v] CSS
* [] Use CSS sprites instead? Gulp helps with this I guess
* [] Reduce the number of libraries in use?
* [] Mobile..first (ish... :-P)
    * [] Smaller images
    * [v] Better handling of the content (css)
* [v] Use LESS, for ffs (or SASS for that matter..).

# Last updated

## Changelist

### AngularJs removed

I've decided to remove the whole AngularJS stuff all together from the application itself due to it does not fit here. I'm creating a different application that uses AngularJS, which also makes more sense.

### REST services

REST-services will be hosted using PHP (at least in the beginning). This is related to services such as Twitter and.. well, other stuff. 

## Date

21.03.2017
