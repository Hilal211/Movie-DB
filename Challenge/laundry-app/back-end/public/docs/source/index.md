---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Authentication management

APIs for managing Authentication
<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## Authentication Logout

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/logout" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/logout");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->

<!-- START_b355f1b3bc7541b04143ea45e4b7ffa1 -->
## Authentication Token refresh

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/refresh" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/refresh");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/refresh`


<!-- END_b355f1b3bc7541b04143ea45e4b7ffa1 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Authentication Login

> Example request:

```bash
curl -X POST "http://localhost:8000/api/login" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"email":"aut","password":"corporis"}'

```

```javascript
const url = new URL("http://localhost:8000/api/login");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "aut",
    "password": "corporis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  optional  | requited The user email field.
    password | string |  required  | The user password field.

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

#Contact management

APIs for managing contacts
<!-- START_2320936f7c7a29fe1b1faf0be6fee8ef -->
## Fetch the list of all contacts

This api route return all the contacts in the database without the deleted one

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/contacts" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/contacts");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/contacts`


<!-- END_2320936f7c7a29fe1b1faf0be6fee8ef -->

<!-- START_47c2efeaf62c42ca6aab8e676b494b40 -->
## Store a contact request inside the database and send email to the administrators

The email functionality

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/contacts" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"subject":"eligendi","message":"praesentium","email":"distinctio","name":"enim","address":"voluptas","phone_number":"quaerat"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/contacts");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "subject": "eligendi",
    "message": "praesentium",
    "email": "distinctio",
    "name": "enim",
    "address": "voluptas",
    "phone_number": "quaerat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/contacts`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    subject | string |  required  | The subject of the contact form.
    message | string |  required  | The message of the contact form.
    email | string |  required  | The user email.
    name | string |  optional  | The user name.
    address | string |  optional  | The user address
    phone_number | string |  optional  | The user phone number

<!-- END_47c2efeaf62c42ca6aab8e676b494b40 -->

<!-- START_b77d96849f13e518dd79c7801a8f0854 -->
## Fetch 1 contact per contact id

This functionality is to be used in the admin panel <br/>
For the {contact} pass the contact id

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/contacts/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/contacts/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/contacts/{contact}`


<!-- END_b77d96849f13e518dd79c7801a8f0854 -->

<!-- START_9aec7381d4dd89e68a9ff728678d8b21 -->
## Update a contact request inside the database

This functionality is to be used in the admin panel <br/>
For the {contact} pass the contact id

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/contacts/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"subject":"maiores","message":"minima","email":"libero","name":"ut","address":"alias","phone_number":"molestiae"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/contacts/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "subject": "maiores",
    "message": "minima",
    "email": "libero",
    "name": "ut",
    "address": "alias",
    "phone_number": "molestiae"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/contacts/{contact}`

`PATCH api/v1/contacts/{contact}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    subject | string |  required  | The subject of the contact form.
    message | string |  required  | The message of the contact form.
    email | required |  optional  | string The user email who submitted the contact form
    name | string |  optional  | The user name.
    address | string |  optional  | The user address
    phone_number | string |  optional  | The user phone number

<!-- END_9aec7381d4dd89e68a9ff728678d8b21 -->

<!-- START_6edc54ea34dd384c52c2ab85854ca8a2 -->
## Completely delete a contact request inside the database

This functionality is to be used in the admin panel <br/>
For the {contact} pass the contact id

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/contacts/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/contacts/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/contacts/{contact}`


<!-- END_6edc54ea34dd384c52c2ab85854ca8a2 -->

#Items type management

APIs for managing items type
<!-- START_323ddaaf1bb6fc0f57fbc28e70705ab6 -->
## Fetch the list of all the available item types

This api route return all the available item types in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/items-types" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/items-types");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/items-types`


<!-- END_323ddaaf1bb6fc0f57fbc28e70705ab6 -->

<!-- START_5d51c6a02f4172bc96665a23e792e5c2 -->
## Store a new order inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/items-types" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"adipisci","price":"cumque"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/items-types");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "adipisci",
    "price": "cumque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/items-types`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The item type title.
    price | money |  required  | The item type title, number format should be with no more than 2 leading number after the decimal, 12.22 222,22.

<!-- END_5d51c6a02f4172bc96665a23e792e5c2 -->

<!-- START_7f5477ca19e3164647bccc1d1d38c139 -->
## List the details of 1 item type&lt;br/&gt;

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/items-types/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/items-types/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/items-types/{items_type}`


<!-- END_7f5477ca19e3164647bccc1d1d38c139 -->

<!-- START_4106c27b20bac006382e473a83c750f6 -->
## Update am existing item type inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/items-types/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"voluptatem","price":"aut"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/items-types/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "voluptatem",
    "price": "aut"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/items-types/{items_type}`

`PATCH api/v1/items-types/{items_type}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The item type title.
    price | money |  required  | The item type title, number format should be with no more than 2 leading number after the decimal, 12.22 222,22.

<!-- END_4106c27b20bac006382e473a83c750f6 -->

<!-- START_a7cd3ab712d2ef327aedf01078ae74b0 -->
## Completely delete an item type by providing the item type id

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/items-types/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/items-types/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/items-types/{items_type}`


<!-- END_a7cd3ab712d2ef327aedf01078ae74b0 -->

#Order Items management

APIs for managing order items
<!-- START_0514ba5d9dea73595bef9063895476ba -->
## Fetch the list of all orders items

This api route return all the orders in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/order-items" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/order-items");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/order-items`


<!-- END_0514ba5d9dea73595bef9063895476ba -->

<!-- START_d288b2186b153f60b446973521c976cf -->
## Store a new order item inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/order-items" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"order_id":3,"item_type_id":5,"status":"eos","details":"delectus"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/order-items");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "order_id": 3,
    "item_type_id": 5,
    "status": "eos",
    "details": "delectus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/order-items`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    order_id | integer |  required  | The order Id, it should be a valid order id.
    item_type_id | integer |  required  | The Item type Id, it should be a valid item_type id.
    status | string |  optional  | The order item status, should be one of the following pending, processing, done.
    details | string |  optional  | The order item details.

<!-- END_d288b2186b153f60b446973521c976cf -->

<!-- START_6686a023ef6872dedd1749beb4a00d7a -->
## List the details of 1 order item by Order item id &lt;br/&gt;
 /api/v1/order-items/{order_item} where order_item is an integer

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/order-items/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/order-items/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/order-items/{order_item}`


<!-- END_6686a023ef6872dedd1749beb4a00d7a -->

<!-- START_2fd9845df376b08d8d108f563c8709c0 -->
## Modify an existing order item inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/order-items/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"order_id":8,"item_type_id":16,"status":"similique","details":"laborum"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/order-items/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "order_id": 8,
    "item_type_id": 16,
    "status": "similique",
    "details": "laborum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/order-items/{order_item}`

`PATCH api/v1/order-items/{order_item}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    order_id | integer |  required  | The order Id, it should be a valid order id.
    item_type_id | integer |  required  | The Item type Id, it should be a valid item_type id.
    status | string |  optional  | The order item status, should be one of the following pending, processing, done.
    details | string |  optional  | The order item details.

<!-- END_2fd9845df376b08d8d108f563c8709c0 -->

<!-- START_9981e7b68fd4e46d4bcd9670af7ad668 -->
## Completely delete an order item by providing the order_item id
 /api/v1/order-items/{order_item} where order_item is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/order-items/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/order-items/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/order-items/{order_item}`


<!-- END_9981e7b68fd4e46d4bcd9670af7ad668 -->

#Orders management

APIs for managing orders
<!-- START_25bf4092f5e200124a149897733aac34 -->
## Fetch the list of all orders

This api route return all the orders in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/orders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/orders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/orders`


<!-- END_25bf4092f5e200124a149897733aac34 -->

<!-- START_c79cb2035f69ac8078c2cec9fc2fab4a -->
## Store a new order inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/orders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":16,"details":"odio","priority":true,"order_status":"explicabo"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/orders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 16,
    "details": "odio",
    "priority": true,
    "order_status": "explicabo"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/orders`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  required  | The customer Id, it should be a customer id.
    details | string |  optional  | The order details.
    priority | boolean |  optional  | The order priority, true to indicate that the order has a priority.
    order_status | string |  optional  | The order status, should be one of the following pending, processing, done.

<!-- END_c79cb2035f69ac8078c2cec9fc2fab4a -->

<!-- START_b4bbc4b1b4c4ddc2effe9e5e2475dd8d -->
## List the details of 1 order by Order id &lt;br/&gt;
 /api/v1/orders/{order} where order is an integer

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/orders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/orders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/orders/{order}`


<!-- END_b4bbc4b1b4c4ddc2effe9e5e2475dd8d -->

<!-- START_2e6d997181b1c50b2b94eaa14b66f016 -->
## Update am existing order inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/orders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":8,"details":"et","priority":true,"order_status":"iusto"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/orders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 8,
    "details": "et",
    "priority": true,
    "order_status": "iusto"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/orders/{order}`

`PATCH api/v1/orders/{order}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  required  | The customer Id, it should be an order id.
    details | string |  optional  | The order details.
    priority | boolean |  optional  | The order priority, true to indicate that the order has a priority.
    order_status | string |  optional  | The order status, should be one of the following pending, processing, done.

<!-- END_2e6d997181b1c50b2b94eaa14b66f016 -->

<!-- START_f34ad9d71f18dd67576cc6db60268192 -->
## Completely delete an order by providing the order id
 /api/v1/orders/{order} where order is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/orders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/orders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/orders/{order}`


<!-- END_f34ad9d71f18dd67576cc6db60268192 -->

#Pages with no Repeated field management

APIs for managing Page with no Repeated fields
<!-- START_f8cedb132fa534bf5fac7d0f950f6d30 -->
## Fetch the list of all pages with no Repeated fields

This api route return all the pages with no repeated fields in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/pages-with-no-repeated-fields" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/pages-with-no-repeated-fields");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "history": "",
        "short_history": "",
        "about_title": "",
        "about_subtitle": "",
        "footer_description": "",
        "social_media_facebook": "",
        "social_media_twitter": "",
        "social_media_instagram": "",
        "social_media_youtube": "",
        "created_at": null,
        "updated_at": null,
        "deleted_at": null
    }
]
```

### HTTP Request
`GET api/v1/pages-with-no-repeated-fields`


<!-- END_f8cedb132fa534bf5fac7d0f950f6d30 -->

<!-- START_cad2dc8c7c121889e31ad8078761d375 -->
## Store a new pages with no repeated fields inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/pages-with-no-repeated-fields" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"history":"unde","short_history":"sed","about_title":"placeat","about_subtitle":"dolor","footer_description":"odit","social_media_facebook":"quis","social_media_twitter":"sit","social_media_instagram":"amet","social_media_youtube":"aut"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/pages-with-no-repeated-fields");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "history": "unde",
    "short_history": "sed",
    "about_title": "placeat",
    "about_subtitle": "dolor",
    "footer_description": "odit",
    "social_media_facebook": "quis",
    "social_media_twitter": "sit",
    "social_media_instagram": "amet",
    "social_media_youtube": "aut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/pages-with-no-repeated-fields`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    history | string |  optional  | The history field.
    short_history | string |  optional  | The short history field.
    about_title | string |  optional  | The about title field.
    about_subtitle | string |  optional  | The about sub-title field.
    footer_description | string |  optional  | The footer description field.
    social_media_facebook | string |  optional  | The facebook link field.
    social_media_twitter | string |  optional  | The twitter link field.
    social_media_instagram | string |  optional  | The instagram link field.
    social_media_youtube | string |  optional  | The youtube link field.

<!-- END_cad2dc8c7c121889e31ad8078761d375 -->

<!-- START_f770f9b2565454c502fcdf100b4022ef -->
## List the details of 1 pages with no repeated fields by providing the page id &lt;br/&gt;

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/pages-with-no-repeated-fields/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/pages-with-no-repeated-fields/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/v1/pages-with-no-repeated-fields/{pages_with_no_repeated_field}`


<!-- END_f770f9b2565454c502fcdf100b4022ef -->

<!-- START_01e9dcae245d8f1321dcce3955fb2b08 -->
## Update an existing pages with no repeated fields inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/pages-with-no-repeated-fields/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"history":"aut","short_history":"est","about_title":"et","about_subtitle":"amet","footer_description":"est","social_media_facebook":"vitae","social_media_twitter":"dolore","social_media_instagram":"dolor","social_media_youtube":"molestiae"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/pages-with-no-repeated-fields/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "history": "aut",
    "short_history": "est",
    "about_title": "et",
    "about_subtitle": "amet",
    "footer_description": "est",
    "social_media_facebook": "vitae",
    "social_media_twitter": "dolore",
    "social_media_instagram": "dolor",
    "social_media_youtube": "molestiae"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/pages-with-no-repeated-fields/{pages_with_no_repeated_field}`

`PATCH api/v1/pages-with-no-repeated-fields/{pages_with_no_repeated_field}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    history | string |  optional  | The history field.
    short_history | string |  optional  | The short history field.
    about_title | string |  optional  | The about title field.
    about_subtitle | string |  optional  | The about sub-title field.
    footer_description | string |  optional  | The footer description field.
    social_media_facebook | string |  optional  | The facebook link field.
    social_media_twitter | string |  optional  | The twitter link field.
    social_media_instagram | string |  optional  | The instagram link field.
    social_media_youtube | string |  optional  | The youtube link field.

<!-- END_01e9dcae245d8f1321dcce3955fb2b08 -->

<!-- START_b94c9719b484181b7cd01c719be4446e -->
## Completely delete pages with no repeated fields by providing 1 page id per time
 /api/v1/services/{service} where service is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/pages-with-no-repeated-fields/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/pages-with-no-repeated-fields/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/pages-with-no-repeated-fields/{pages_with_no_repeated_field}`


<!-- END_b94c9719b484181b7cd01c719be4446e -->

#Permission management

APIs for managing permission
<!-- START_bd2777b2132db6c9cf93e928b5b5e44d -->
## api/v1/permissions
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/permissions" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/permissions");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/permissions`


<!-- END_bd2777b2132db6c9cf93e928b5b5e44d -->

<!-- START_defb597dbd6eb21dee1f472ef6340873 -->
## api/v1/permissions
> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/permissions" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/permissions");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/permissions`


<!-- END_defb597dbd6eb21dee1f472ef6340873 -->

<!-- START_2cbf87c71ec8fd9634996f224a875400 -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/permissions/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/permissions/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/permissions/{permission}`


<!-- END_2cbf87c71ec8fd9634996f224a875400 -->

<!-- START_102bcc89441658cf73bc3c85f82009fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/permissions/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/permissions/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/permissions/{permission}`

`PATCH api/v1/permissions/{permission}`


<!-- END_102bcc89441658cf73bc3c85f82009fe -->

<!-- START_a76ff06df82f5e7b38639608624548fe -->
## api/v1/permissions/{permission}
> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/permissions/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/permissions/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/permissions/{permission}`


<!-- END_a76ff06df82f5e7b38639608624548fe -->

#Role management

APIs for managing user roles
<!-- START_d2f16357cb4ed36dbb0e9529ea4a460c -->
## Fetch the list of all roles

This api route return all the roles in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/roles" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/roles");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/roles`


<!-- END_d2f16357cb4ed36dbb0e9529ea4a460c -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## Store a new role inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/roles" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"sit","permissions":[4]}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/roles");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "sit",
    "permissions": [
        4
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/roles`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The new role title.
    permissions | array |  required  | The set of permission id's.
    permissions.* | integer |  optional  | The permission id.

<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_ba05db58d706b9f94944b1ab79e1e4a2 -->
## List the details of 1 role by role id &lt;br/&gt;
 /api/v1/roles/{role} where role is an integer

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/roles/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/roles/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/roles/{role}`


<!-- END_ba05db58d706b9f94944b1ab79e1e4a2 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## Update an existing role inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/roles/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"qui","permissions":[1]}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/roles/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "qui",
    "permissions": [
        1
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The new role title.
    permissions | array |  required  | The set of permission id's.
    permissions.* | integer |  optional  | The permission id.

<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## Completely delete role by providing 1 role id per time
 /api/v1/roles/{role} where role is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/roles/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/roles/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

#Service management

APIs for managing services
<!-- START_3c8c4484a110a0ade00412f7d0833d72 -->
## Fetch the list of all services

This api route return all the services in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/services" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/services");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": [],
    "messages": []
}
```

### HTTP Request
`GET api/v1/services`


<!-- END_3c8c4484a110a0ade00412f7d0833d72 -->

<!-- START_c033867c72496b8d075badce4e3f7cfd -->
## Store a new sliders inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/services" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"vel","image":"et","description":"accusamus"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/services");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "vel",
    "image": "et",
    "description": "accusamus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/services`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The slider title.
    image | file |  required  | The slider image.
    description | string |  optional  | The service description.

<!-- END_c033867c72496b8d075badce4e3f7cfd -->

<!-- START_ff62824d7658444958c89b023a8326f7 -->
## List the details of 1 service by providing the service id &lt;br/&gt;

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/services/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/services/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "data": null,
    "messages": [
        "Id not found in  the database"
    ]
}
```

### HTTP Request
`GET api/v1/services/{service}`


<!-- END_ff62824d7658444958c89b023a8326f7 -->

<!-- START_d48326c80f7a952beab3182ea5ce92da -->
## Update an existing service inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/services/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"nobis","image":"aliquid","description":"enim"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/services/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "nobis",
    "image": "aliquid",
    "description": "enim"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/services/{service}`

`PATCH api/v1/services/{service}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The slider title.
    image | file |  optional  | The slider image.
    description | string |  optional  | The service description.

<!-- END_d48326c80f7a952beab3182ea5ce92da -->

<!-- START_d474edd02766b598445c1c4a790d8bc4 -->
## Completely delete service by providing 1 service id per time
 /api/v1/services/{service} where service is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/services/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/services/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/services/{service}`


<!-- END_d474edd02766b598445c1c4a790d8bc4 -->

#Slider management

APIs for managing users
<!-- START_6f5fe12417b53d8fbd4c2e8e5a210413 -->
## Fetch the list of all sliders

This api route return all the sliders in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/sliders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/sliders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": [],
    "messages": []
}
```

### HTTP Request
`GET api/v1/sliders`


<!-- END_6f5fe12417b53d8fbd4c2e8e5a210413 -->

<!-- START_f5d44877d0b8c939033f596aa4188327 -->
## Store a new sliders inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/sliders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"aut","image":"occaecati","sub_title":"totam"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/sliders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "aut",
    "image": "occaecati",
    "sub_title": "totam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/sliders`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The slider title.
    image | file |  required  | The slider image.
    sub_title | string |  optional  | The slider subtitle.

<!-- END_f5d44877d0b8c939033f596aa4188327 -->

<!-- START_3093f6c1e40a8f8073aa2d600a9bae71 -->
## List the details of 1 slider by providing the slider id &lt;br/&gt;

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/sliders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/sliders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "data": null,
    "messages": [
        "Id not found in  the database"
    ]
}
```

### HTTP Request
`GET api/v1/sliders/{slider}`


<!-- END_3093f6c1e40a8f8073aa2d600a9bae71 -->

<!-- START_3a2b3df8f7515dce39d5a7a0e435fa78 -->
## Update an existing slider inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/sliders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"title":"beatae","image":"veritatis","sub_title":"dolore"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/sliders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "beatae",
    "image": "veritatis",
    "sub_title": "dolore"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/sliders/{slider}`

`PATCH api/v1/sliders/{slider}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The slider title.
    image | file |  optional  | The slider image.
    sub_title | string |  optional  | The slider subtitle.

<!-- END_3a2b3df8f7515dce39d5a7a0e435fa78 -->

<!-- START_9bac4597a6e7bf2c8ae67c21263a5185 -->
## Completely delete slider by providing 1 slider id per time
 /api/v1/sliders/{slider} where slider is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/sliders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/sliders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/sliders/{slider}`


<!-- END_9bac4597a6e7bf2c8ae67c21263a5185 -->

#User management

APIs for managing users
<!-- START_1aff981da377ba9a1bbc56ff8efaec0d -->
## Fetch the list of all users

This api route return all the users in the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/users" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/users");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/users`


<!-- END_1aff981da377ba9a1bbc56ff8efaec0d -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store a new user inside the database

> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/users" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"first_name":"vel","last_name":"molestias","middle_name":"culpa","email":"culpa","password":"animi","roles":[12]}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/users");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "first_name": "vel",
    "last_name": "molestias",
    "middle_name": "culpa",
    "email": "culpa",
    "password": "animi",
    "roles": [
        12
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | The first name of the registered user.
    last_name | string |  required  | The last name of the registered user.
    middle_name | string |  required  | The middle name of the registered user.
    email | string |  required  | The email of the registered user.
    password | string |  required  | The password of the registered user.
    roles | array |  required  | The set of roles of the registered user, it accepts 1 to many roles.
    roles.* | integer |  required  | The role id of the registered user.

<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
## List the details of 1 user by user id &lt;br/&gt;
 /api/v1/users/{user} where user is an integer

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/users/2" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/users/2");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\User] 2"
}
```

### HTTP Request
`GET api/v1/users/{user}`


<!-- END_cedc85e856362e0e3b46f5dcd9f8f5d0 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## Update an existing user inside the database

> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/users/2" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M" \
    -H "Content-Type: application/json" \
    -d '{"first_name":"unde","last_name":"optio","middle_name":"non","email":"nisi","password":"reprehenderit","roles":[6]}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/users/2");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "first_name": "unde",
    "last_name": "optio",
    "middle_name": "non",
    "email": "nisi",
    "password": "reprehenderit",
    "roles": [
        6
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | The first name of the registered user.
    last_name | string |  required  | The last name of the registered user.
    middle_name | string |  required  | The middle name of the registered user.
    email | string |  required  | The email of the registered user.
    password | string |  required  | The password of the registered user.
    roles | array |  required  | The set of roles of the registered user, it accepts 1 to many roles.
    roles.* | integer |  required  | The role id of the registered user.

<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## Completely delete user by providing 1 user id per time
 /api/v1/users/{user} where user is an integer

> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/users/2" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/users/2");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

#general
<!-- START_8d91e5844d6d0d4d4bd6c81bea6a2da7 -->
## api/v1/content-categories
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-categories" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-categories");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/content-categories`


<!-- END_8d91e5844d6d0d4d4bd6c81bea6a2da7 -->

<!-- START_e5d0933328bdfa061318c13aadde041c -->
## api/v1/content-categories
> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/content-categories" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-categories");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/content-categories`


<!-- END_e5d0933328bdfa061318c13aadde041c -->

<!-- START_6fec64742648888fcda919bbda89576a -->
## api/v1/content-categories/{content_category}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-categories/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-categories/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\ContentCategory] 1"
}
```

### HTTP Request
`GET api/v1/content-categories/{content_category}`


<!-- END_6fec64742648888fcda919bbda89576a -->

<!-- START_6662634ed8621ccf89295e4a5279612a -->
## api/v1/content-categories/{content_category}
> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/content-categories/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-categories/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/content-categories/{content_category}`

`PATCH api/v1/content-categories/{content_category}`


<!-- END_6662634ed8621ccf89295e4a5279612a -->

<!-- START_924a6b254f657e417f7885078b96208b -->
## api/v1/content-categories/{content_category}
> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/content-categories/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-categories/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/content-categories/{content_category}`


<!-- END_924a6b254f657e417f7885078b96208b -->

<!-- START_e3ad7aa79c2581181bb9c8736d5263cb -->
## api/v1/content-tags
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-tags" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-tags");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/content-tags`


<!-- END_e3ad7aa79c2581181bb9c8736d5263cb -->

<!-- START_e23dec6942ce8a5a8ebf203bccc43887 -->
## api/v1/content-tags
> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/content-tags" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-tags");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/content-tags`


<!-- END_e23dec6942ce8a5a8ebf203bccc43887 -->

<!-- START_1e556198cde575f8011775c9062f823b -->
## api/v1/content-tags/{content_tag}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-tags/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-tags/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\ContentTag] 1"
}
```

### HTTP Request
`GET api/v1/content-tags/{content_tag}`


<!-- END_1e556198cde575f8011775c9062f823b -->

<!-- START_5459bf27b1be4db934cc4186ede2a030 -->
## api/v1/content-tags/{content_tag}
> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/content-tags/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-tags/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/content-tags/{content_tag}`

`PATCH api/v1/content-tags/{content_tag}`


<!-- END_5459bf27b1be4db934cc4186ede2a030 -->

<!-- START_189360b64f2b2347996af22b9867b40d -->
## api/v1/content-tags/{content_tag}
> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/content-tags/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-tags/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/content-tags/{content_tag}`


<!-- END_189360b64f2b2347996af22b9867b40d -->

<!-- START_6f34192e005ba8895be877ad6bba4672 -->
## api/v1/content-pages
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-pages" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-pages");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/content-pages`


<!-- END_6f34192e005ba8895be877ad6bba4672 -->

<!-- START_5ab737b22d5e837c6f39aff170594e84 -->
## api/v1/content-pages
> Example request:

```bash
curl -X POST "http://localhost:8000/api/v1/content-pages" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-pages");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/content-pages`


<!-- END_5ab737b22d5e837c6f39aff170594e84 -->

<!-- START_f879dd1caac0395c595968ca58800b50 -->
## api/v1/content-pages/{content_page}
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/content-pages/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-pages/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\ContentPage] 1"
}
```

### HTTP Request
`GET api/v1/content-pages/{content_page}`


<!-- END_f879dd1caac0395c595968ca58800b50 -->

<!-- START_955b1123a58ee7d3b66a6adfb6a9ff5d -->
## api/v1/content-pages/{content_page}
> Example request:

```bash
curl -X PUT "http://localhost:8000/api/v1/content-pages/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-pages/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/content-pages/{content_page}`

`PATCH api/v1/content-pages/{content_page}`


<!-- END_955b1123a58ee7d3b66a6adfb6a9ff5d -->

<!-- START_a0122b565edaf776aa8feafb62b7771d -->
## api/v1/content-pages/{content_page}
> Example request:

```bash
curl -X DELETE "http://localhost:8000/api/v1/content-pages/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/content-pages/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/content-pages/{content_page}`


<!-- END_a0122b565edaf776aa8feafb62b7771d -->

<!-- START_6e1b22ce7da0eeee6952e6031a0e1f29 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/customer/orders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/customer/orders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/customer/orders`


<!-- END_6e1b22ce7da0eeee6952e6031a0e1f29 -->

<!-- START_41e8a44c45239795f054103e095f9dea -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/customer/orders/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/customer/orders/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/customer/orders/{id}`


<!-- END_41e8a44c45239795f054103e095f9dea -->

<!-- START_8d65903e62dc2b7696ec1f7f851e942c -->
## api/v1/customer/{customer_id}/orders
> Example request:

```bash
curl -X GET -G "http://localhost:8000/api/v1/customer/1/orders" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/customer/1/orders");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2MzUyMTE1NywiZXhwIjoxNTYzNTI0NzU3LCJuYmYiOjE1NjM1MjExNTcsImp0aSI6IktIVEpQWWN1WUVxcjliZ1kiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZQBucL9PWPcQGjBbAPZrhj0blKdFOkntO1VIo9enN5M",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "Token not provided"
}
```

### HTTP Request
`GET api/v1/customer/{customer_id}/orders`


<!-- END_8d65903e62dc2b7696ec1f7f851e942c -->


