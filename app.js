var express = require('express')
var path = require('path')

var app = express()

app.use(express.static(path.join(__dirname, 'public')));

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.locals.pretty = true;
app.locals.env = app.get('env');

app.get('/', function (req, res) {
  //res.send('Hello World')
  res.render('index')
})

app.use(function(req, res, next) {
  res.status(404);
  res.render('404');
});
 
app.listen(3000)