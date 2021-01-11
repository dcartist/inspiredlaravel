# INSPIRED TECH LIFE #

##About
Dreamed up during the Digital Ocean hackathon, Inspired Tech life is a community for developers, designers, data scientists, and beyond. ITF's purpose is to help those in the tech world find help and support through groups, videos, mantras, and find support resources.



## Why Inspired Tech Life
While working as an instructional associate General Assembly, I found myself helping to inspire other students (designers, developers, and data scientists) that went beyond just the technical aspect. I feel there is a need for inspirational creative, and encouragement during life, especially when imposter syndrome, depression, doubt, and lack of focus can run amuck in this climate. 

*--Paula Bannerman*




## Language & Framework

- PHP

- Laravel 8 

- Tailwind CSS

- FontAwesome

- PSQL

- Node JS

  

## Deployment

Digital Ocean Platform


## Requirements For Deployment on Digital Ocean

* You need a DigitalOcean account. If you don't already have one, you can sign up at https://cloud.digitalocean.com/registrations/new
  
## Forking the Sample App Source Code

To use all the features of App Platform, you need to be running against your own copy of this application. To make a copy, click the Fork button above and follow the on-screen instructions. In this case, you'll be forking this repo as a starting point for your own app (see [Github documentation](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo) to learn more about forking repos.

After forking the repo, you should now be viewing this README in your own github org (e.g. `https://github.com/<your-org>/sample-laravel`)

**Note:** You can skip forking this repo and select the "Laravel" sample from the app creation page, however do notice that certain features will be disabled.

## Deploying the App ##

Click this button to deploy the app to the DigitalOcean App Platform.

 [![Deploy to DO](https://mp-assets1.sfo2.digitaloceanspaces.com/deploy-to-do/do-btn-blue.svg)](https://cloud.digitalocean.com/apps/new?repo=https://github.com/dcartist/inspiredlaravel/tree/master)

## Making Changes to Your App ##

As long as you left the default Autodeploy option enabled when you first launched this app, you can now make code changes and see them automatically reflected in your live application. During these automatic deployments, your application will never pause or stop serving request because the App Platform offers zero-downtime deployments.

**NOTE** This sample repository contains an `.env` file with a pre-generated application key. Committing `.env` files with secrets to the same repository that holds the application's source code is _not_ good practice, however, this is done to ensure that _this_ sample repository works out of the box.

To deploy a Laravel application to App Platform, you will need to set your application key. Generate a key by running the following command on your local machine:

```
❯ php artisan --no-ansi key:generate --show
base64:UdAH2B63rlotjrkSSsj3Hppy4gbfr+OeHvtSdF9r9q8=
```

Copy the `base64:...` output to your clipboard. This is your application key. When deploying your application to App Platform, configure the `APP_KEY` environment variable to use the key you generated.
