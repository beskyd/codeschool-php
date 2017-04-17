### Deploy to Heroku

1. Install heroku from [toolbelt.heroku.com](https://toolbelt.heroku.com) or [heroku-cli](https://devcenter.heroku.com/articles/heroku-cli)
2. run `heroku` and enter your login/password
3. run `heroku create` to create a new app
4. add heroku remote if it has not been added 
5. run `git push heroku master`

**Warning!**: Place all files to the root folder of your repo to avoid *buildpack* error when deploying. 

