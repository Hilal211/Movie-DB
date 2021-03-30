const express = require('express')
const app = express()
const port = 3000
const hours=new Date().getHours();
const minutes=new Date().getMinutes();
const TIME=hours+":"+minutes;

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
    if(req.query.s == "" || req.query.s == undefined){res.status(500).send('You have to enter a search')}
    else{res.status(200).send("OK! You searched for:" + req.query.s)}
})
  