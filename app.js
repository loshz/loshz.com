require('dotenv').load();

var express = require('express')
var raven = require('raven')
var path = require('path')

var app = express()

app.use(raven.middleware.express.requestHandler(process.env.SENTRY_DSN));
app.use(express.static(path.join(__dirname, 'public')));

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.locals.pretty = true;
app.locals.env = process.env.APP_ENV;
app.locals.url = process.env.URL;

app.get('/', function (req, res) {
  res.render('index')
})

app.use(function(req, res, next) {
  res.status(404);
  res.render('404');
});

app.use(raven.middleware.express.errorHandler(process.env.SENTRY_DSN));
 
app.listen(3030)
