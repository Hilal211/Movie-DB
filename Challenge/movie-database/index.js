const express = require('express')
const app = express()
const port = 3000
const hours = new Date().getHours();
const minutes = new Date().getMinutes();
const TIME = hours + ":" + minutes;
const MongoClient = require('mongodb').MongoClient;
const bodyParser = require('body-parser');
const db = require('./db');
app.use(bodyParser.urlencoded({ extended: true }));
MongoClient.connect(db, { useUnifiedTopology: true })

// MongoClient.connect(db.url, (err, database) => {
//   if (err) return console.log(err)
//   require('./index')(app, database);

//   app.listen(port, () => {
//     console.log('We are live on ' + port);
//   });               
// }) 

const movies = [
  { title: 'Jaws', year: 1975, rating: 8 },
  { title: 'Avatar', year: 2009, rating: 7.8 },
  { title: 'Brazil', year: 1985, rating: 8 },
  { title: 'الإرهاب والكباب‎', year: 1992, rating: 6.2 }
]

app.get('/', (req, res) => {
  res.send('ok')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

app.get('/test', function (req, res) {
  res.status(200).send("ok")
})

app.get('/time', function (req, res) {
  res.status(200).send(TIME)
})

app.get('/Hello', function (req, res) {
  res.status(200).send("Hello")
})

app.get('/Hello/:id', function (req, res) {
  res.status(200).send("Hello " + req.params.id)
})

app.get('/search?s', function (req, res) {
  if (req.query.s == "" || req.query.s == undefined) { res.status(500).send('You have to enter a search') }
  else { res.status(200).send("OK! You searched for:" + req.query.s) }
})

app.get('/movies/create', (req, res) => {
  res.send("Create")
});

app.get('/movies/read', (req, res) => {
  res.status(200).send(movies)
});

app.get('/movies/update', (req, res) => {
  res.send("Update")
});

app.get('/movies/delete', (req, res) => {
  res.send("Delete")
});

app.get('/movies/read/by-date', function (req, res) {
  movies.sort((a, b) => (a.year > b.year) ? 1 : -1)
  res.status(200).send(movies)
})

app.get('/movies/read/by-rating', function (req, res) {
  movies.sort((a, b) => (a.rating < b.rating) ? 1 : -1)
  res.status(200).send(movies)
})

app.get('/movies/read/by-title', function (req, res) {
  movies.sort((a, b) => (a.title > b.title) ? 1 : -1)
  res.status(200).send(movies)
})

app.get('/movies/read/id/:id', function (req, res) {
  if (req.params.id > 0 && req.params.id <= movies.length) {
    res.status(200).send(movies[req.params.id - 1])
  }
  else {
    res.status(404).send('the movie ' + req.params.id + ' does not exist')
  }

})

app.post('/movies/add', function (req, res) {
  const title = req.query.title;
  const year = parseInt(req.query.year);
  const rating = parseInt(req.query.rating);
  var movie = {};
  if (title === null || year === null || year.toString().length != 4 || typeof (parseInt(year)) !== 'number') {
    res.status(404).send('you cannot create a movie without providing a title and a year');
  } else {
    if (rating === null) {
      movie = { title: title, year: year, rating: 4 }
    }
    else {
      movie = { title: title, year: year, rating: rating }
    }

  }
  movies.push(movie);
  res.status(200).send(movies)

})

app.delete('/movies/delete/:id', function (req, res) {
  const id = parseInt(req.params.id);
  if (id < 1 || id > movies.length) {
    res.status(404).send('the movie ' + id + ' does not exist');
  }
  else {
    movies.splice(id - 1, 1);
    res.send(movies)
  }

})

app.put('/movies/update/:id', function (req, res) {
  const id = parseInt(req.params.id);
  if (id < 1 || id > movies.length) {
    res.status(404).send('the movie ' + id + ' does not exist');
  }
  else {
    const movie = movies[id - 1]
    const arrObj = Object.values(movie);
  }
  const title = req.query.title;
  const year = parseInt(req.query.year);
  const rating = parseInt(req.query.rating);
  if ((title == "" || title == undefined) && (year == "" || year == undefined) && (rating == "" || rating == undefined)) {
    res.send('you are not updated anythings')
  }
  else {
    (title == "" || title == undefined) ? movies[id - 1].title = arrObj[0] : movies[id - 1].title = title;
    (year == "" || year == undefined) ? movies[id - 1].year = arrObj[1] : movies[id - 1].year = year;
    (rating == "" || rating == undefined) ? movies[id - 1].rating = arrObj[2] : movies[id - 1].rating = rating;
  }
  res.send(movies);
})
