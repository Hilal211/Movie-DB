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
    res.send({status:200, message:"ok"})
  })

  app.get('/time', function (req, res) {
    res.send({status:200, message:TIME})
  })