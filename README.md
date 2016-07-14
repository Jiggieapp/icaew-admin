ICAEW Admin - API
=================

## Admin

## API

### URL Schema
```
http://icaew-admin.jiggieapp.com/api/{path}/?{param1=1}&{param2=1}
```
if no error occured server send Response header status code to 200

### Response Body
- collection
```json
{
  "code": 200,
  "message": "OK",
  "data": [
  	{
    	"id": 1,
    	"title": "Tentang Kita",
    	"...": "..."
  	}
  ]
}
```
- non collection
```json
{
	"code": 200,
	"message": "OK",
	"data": {
			"id": 1,
			"country_id": "1",
			"title": "Pensi",
			"": ""
		}
}
```

### Code (in response body)

| Code    | Message | Description |
| ------- | ------- | ------- |
| 200 | OK | response success |
| 404 | Endpoint/Record not found | Endpoint/Record not found but status code in response header still 200 |
| 400 | {error message}	| miscellaneous error but status code in response header still 200 |


### GET /about

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": {
    "id": 1,
    "title": "Tentang Kita",
    "description": "<p>\r\n\tAda cerita tentang kita</p>\r\n",
    "image": "http://icaew.app/uploads/files/133a6-1403829032.jpg",
    "created_at": null,
    "updated_at": "2016-06-28 07:00:38"
  }
}
```

### GET /contact

#### Parameters 

| Key           | Description   | Example Value |
| ------------- | ------------- | ------------- |
| country_id    | filter by country_id | 2 |
#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": [
    {
      "id": 1,
      "country_id": 1,
      "telp": "021556",
      "email": "agusfantasy@gmail.com",
      "website": null,
      "facebook": null,
      "address": null,
      "created_at": "2016-06-28 07:11:24",
      "updated_at": "2016-06-28 07:11:24",
      "country_name": "Indonesia"
    }
  ]
}
```

### GET /contact/{id}

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": {
    "id": 1,
    "country_id": 1,
    "telp": "021556",
    "email": "agusfantasy@gmail.com",
    "website": null,
    "facebook": null,
    "address": null,
    "created_at": "2016-06-28 07:11:24",
    "updated_at": "2016-06-28 07:11:24",
    "country_name": "Indonesia"
  }
}
```

### GET /country

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": [
    {
      "id": 1,
      "code": "ID",
      "name": "Indonesia",
      "image": null
    },
    {
      "id": 2,
      "code": "SNG",
      "name": "Singapore",
      "image": null
    },
    {
      "id": 3,
      "code": "VIE",
      "name": "Vietnam",
      "image": "http://icaew.app/uploads/files/55181-1403829032.jpg"
    }
  ]
}
```

### GET /event

#### Parameters 

| Key           | Description   | Example Value |
| ------------- | ------------- | ------------- |
| country_id    | filter by country_id | 2 |
| title     	| search by title name | metallica |

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": [
    {
      "id": 1,
      "country_id": 1,
      "title": "Pensi",
      "description": "<p>\r\n\tasgasb</p>\r\n",
      "summary": "<p>\r\n\tasgasg</p>\r\n",
      "image": "http://icaew.app/uploads/files/ce1e0-1403829032.jpg",
      "start_date": "2016-07-02 10:00:00",
      "end_date": "2016-07-02 20:00:00",
      "created_at": "2016-06-28 07:19:04",
      "updated_at": "2016-06-29 08:21:57",
      "country_name": "Indonesia"
    },
    {
      "id": 2,
      "country_id": 2,
      "title": "Pensiun",
      "description": "<p>\r\n\tasgasbasvlkab</p>\r\n",
      "summary": "<p>\r\n\tasgasg</p>\r\n",
      "image": "http://icaew.app/uploads/files/ce1e0-1403829032.jpg",
      "start_date": "2016-07-02 10:00:00",
      "end_date": "2016-07-02 20:00:00",
      "created_at": "2016-06-28 07:19:04",
      "updated_at": "2016-06-29 08:21:57",
      "country_name": "Singapore"
    }
  ]
}
```

### GET /event/{id}

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": {
    "id": 1,
    "country_id": 1,
    "title": "Pensi",
    "description": "<p>\r\n\tasgasb</p>\r\n",
    "summary": "<p>\r\n\tasgasg</p>\r\n",
    "image": "http://icaew.app/uploads/files/ce1e0-1403829032.jpg",
    "start_date": "2016-07-02 10:00:00",
    "end_date": "2016-07-02 20:00:00",
    "created_at": "2016-06-28 07:19:04",
    "updated_at": "2016-06-29 08:21:57",
    "country_name": "Indonesia"
  }
}
```

### GET /program

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": [
    {
      "id": 1,
      "title": "Matematika Diskrit",
      "description": "<p>\r\n\tasf</p>\r\n",
      "image": "http://icaew.app/uploads/files/ed6ef-1403829032.jpg",
      "youtube": "https://www.youtube.com/watch?v=jJ7DWNLyrbo",
      "is_banner": false,
      "initial": "MTD",
      "like_count": 0,
      "created_at": "2016-06-28 07:29:45",
      "updated_at": "2016-06-29 08:21:30"
    },
    {
      "id": 2,
      "title": "Programming",
      "description": "<p>\r\n\tavsbbds</p>\r\n",
      "image": null,
      "youtube": null,
      "is_banner": false,
      "initial": "PRG",
      "like_count": 10,
      "created_at": "2016-06-29 09:23:49",
      "updated_at": "2016-06-29 09:23:49"
    }
  ]
}
```

### GET /program/{id}

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": {
    "id": 1,
    "title": "Matematika Diskrit",
    "description": "<p>\r\n\tasf</p>\r\n",
    "image": "http://icaew.app/uploads/files/ed6ef-1403829032.jpg",
    "youtube": "https://www.youtube.com/watch?v=jJ7DWNLyrbo",
    "is_banner": false,
    "initial": "MTD",
    "like_count": 10,
    "created_at": "2016-06-28 07:29:45",
    "updated_at": "2016-06-29 08:21:30"
  }
}
```

### PUT /program_like/{id}

#### Response Body
```json
{
  "code": 200,
  "message": "Liked success",
  "data": {
    "count": 14
  }
}

### GET /university

#### Parameters
| Key           | Description   | Example Value |
| ------------- | ------------- | ------------- |
| country_id    | filter by country_id | 2 |

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": [
    {
      "id": 1,
      "country_id": 2,
      "name": "Nanyang",
      "description": "Nanyang is the best university",
      "image": "http://icaew.app/uploads/files/d358f-0-weu-d3-40622ca6c14f2ccc5b9fb4f23bb4c833.jpg",
      "email": null,
      "phone": null,
      "address": null,
      "created_at": "2016-06-28 07:31:43",
      "updated_at": "2016-06-28 07:31:43",
      "country_name": "Singapore"
    },
    {
      "id": 2,
      "country_id": 2,
      "name": "Universitas Paramadina",
      "description": "Paramadina is the best university",
      "image": "http://icaew.app/uploads/files/d358f-0-weu-d3-40622ca6c14f2ccc5b9fb4f23bb4c833.jpg",
      "email": null,
      "phone": null,
      "address": null,
      "created_at": "2016-06-28 07:31:43",
      "updated_at": "2016-06-28 07:31:43",
      "country_name": "Indonesia"
    }
  ]
}
```

### GET /university/{id}

#### Response Body
```json
{
  "code": 200,
  "message": "OK",
  "data": {
    "id": 1,
    "country_id": 2,
    "name": "Nanyang",
    "description": "Nanyang is the best university",
    "image": "http://icaew.app/uploads/files/d358f-0-weu-d3-40622ca6c14f2ccc5b9fb4f23bb4c833.jpg",
    "email": null,
    "phone": null,
    "address": null,
    "created_at": "2016-06-28 07:31:43",
    "updated_at": "2016-06-28 07:31:43",
    "country_name": "Singapore"
  }
}
```