# vegaasen.com v6

# Build status

[![Build Status](https://travis-ci.org/vegaasen/vegaasen_com_version6.svg?branch=master)](https://travis-ci.org/vegaasen/vegaasen_com_version6)

# Introduction

This project represents the v6 of my own pages. 

# Repos for all of your versions?

Jeah..I know, I'll reassemble them in to tags instead - this is a cleanup-job I'll consider doing asap actually :-)

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

# Todos

Notions: 
* [v] == done
* [] == not done 

The lot: 
* [] Convert all `<img/>`-tags to use CSS instead (unless it makes sense in a SEOish way)
* [] Convert to use uglifier/minifier of the following content:
    * [] HTML
    * [] JS
    * [] CSS
* [] Use CSS sprites instead? Gulp helps with this I guess
* [] Reduce the number of libraries in use?
* [] Mobile..first (ish... :-P)
    * [] Smaller images
    * [] Better handling of the content (css)
* [v] Use LESS, for ffs (or SASS for that matter..).

# Last updated

## Changelist

### AngularJs removed

I've decided to remove the whole AngularJS stuff all together from the application itself due to it does not fit here. I'm creating a different application that uses AngularJS, which also makes more sense.

### REST services

REST-services will be hosted using PHP (at least in the beginning). This is related to services such as Twitter and.. well, other stuff. 

## Date

04.01.2017
