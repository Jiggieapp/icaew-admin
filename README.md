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
	code: 200,
	message: "OK",
	count: 10
	data: [
		{
			"id": 1,
			"country_id": "1",
			"title": "Pensi",
			"...": "..."
		}
	]
}
```
- non collection
```json
{
	code: 200,
	message: "OK",
	data: {
			"id": 1,
			"country_id": "1",
			"title": "Pensi",
			"": ""
		}
}
```

### Code (in response body)
```
200: 'success'
404: 'Endpoint/Record not found but status code in response header still 200'
400: 'error from server but status code in  response header still 200' 

### About
```
GET /about
```
#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: "1",
		title: "Tentang Kita",
		description: "<p> Ada cerita tentang kita</p> ",
		image: "http://icaew.app/uploads/files/133a6-1403829032.jpg",
		created_at: "2016-06-28 07:00:38",
		updated_at: "2016-06-28 07:00:38"
	}
}
```

### Contact
```
GET /contact
```

#### Parameters
| key           | description   | ex. value |
| ------------- |-------------- | --------- |
| id            | contact_id    | 1         |

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: "1",
		title: "Tentang Kita",
		description: "<p> Ada cerita tentang kita</p> ",
		image: "http://icaew.app/uploads/files/133a6-1403829032.jpg",
		created_at: "2016-06-28 07:00:38",
		updated_at: "2016-06-28 07:00:38"
	}
}
```

### Contact
```
GET /contact
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: [
		{
			id: 1,
			country_id: 1,
			telp: "021556",
			email: "agus@gmail.com",
			website: null,
			facebook: null,
			address: null,
			created_at: "2016-06-28 07:11:24",
			updated_at: "2016-06-28 07:11:24",
			country_name: "Indonesia"
		}
	]
}
```

```
GET /contact/{id}
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: 1,
		country_id: 1,
		telp: "021556",
		email: "agus@gmail.com",
		website: null,
		facebook: null,
		address: null,
		created_at: "2016-06-28 07:11:24",
		updated_at: "2016-06-28 07:11:24",
		country_name: "Indonesia"
	}
}
```

### Country
```
GET /country
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: [
		{
			id: 1,
			code: "ID",
			name: "Indonesia",
			image: null
		},
		{
			id: 2,
			code: "SNG",
			name: "Singapore",
			image: null
		}
	]
}
```

### Event
```
GET /event
```
#### Parameters 

| Key           | Description   | Example Value |
| ------------- | ------------- | ------------- |
| country_id    | filter by country_id | 2 |
| title     	| search by title name | 'metallica' |

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: [
		{
			id: 1,
			country_id: 1,
			title: "Pensi",
			description: "<p> asgasb</p> ",
			summary: "<p> asgasg</p> ",
			image: "http://icaew.app/uploads/files/ce1e0-1403829032.jpg",
			start_date: "2016-07-02 10:00:00",
			end_date: "2016-07-02 20:00:00",
			created_at: "2016-06-28 07:19:04",
			updated_at: "2016-06-29 08:21:57",
			country_name: "Indonesia"
		}
	]
}
```

```
GET /event/{id}
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: 1,
		country_id: 1,
		title: "Pensi",
		description: "<p> asgasb</p> ",
		summary: "<p> asgasg</p> ",
		image: "http://icaew.app/uploads/files/ce1e0-1403829032.jpg",
		start_date: "2016-07-02 10:00:00",
		end_date: "2016-07-02 20:00:00",
		created_at: "2016-06-28 07:19:04",
		updated_at: "2016-06-29 08:21:57",
		country_name: "Indonesia"
	}
}
```

### Program
```
GET /program
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: [
		{
			id: 1,
			title: "Matematika Diskrit",
			description: "<p> asf</p> ",
			image: "http://icaew.app/uploads/files/ed6ef-1403829032.jpg",
			youtube: "https://www.youtube.com/watch?v=jJ7DWNLyrbo",
			is_banner: false,
			initial: "MTD",
			created_at: "2016-06-28 07:29:45",
			updated_at: "2016-06-29 08:21:30"
		}
	]
}
```

```
GET /program/{id}
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: 1,
		title: "Matematika Diskrit",
		description: "<p> asf</p> ",
		image: "http://icaew.app/uploads/files/ed6ef-1403829032.jpg",
		youtube: "https://www.youtube.com/watch?v=jJ7DWNLyrbo",
		is_banner: false,
		initial: "MTD",
		created_at: "2016-06-28 07:29:45",
		updated_at: "2016-06-29 08:21:30"
	}
}
```

### University
```
GET /university
```
| Key           | Description   | Example Value |
| ------------- | ------------- | ------------- |
| country_id    | filter by country_id | 2 |

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: [
		{
			id: 2,
			country_id: 2,
			name: "Nanyang",
			image: "http://icaew.app/uploads/files/d358f-0-weu-d3-40622ca6c14f2ccc5b9fb4f23bb4c833.jpg",
			email: null,
			phone: null,
			address: null,
			created_at: "2016-06-28 07:31:43",
			updated_at: "2016-06-28 07:31:43",
			country_name: "Singapore"
		}
	]
}
```

```
GET /university/{id}
```

#### Response Body
```json
{
	code: 200,
	message: "OK",
	data: {
		id: 1,
		country_id: 2,
		name: "Nanyang",
		image: "http://icaew.app/uploads/files/d358f-0-weu-d3-40622ca6c14f2ccc5b9fb4f23bb4c833.jpg",
		email: null,
		phone: null,
		address: null,
		created_at: "2016-06-28 07:31:43",
		updated_at: "2016-06-28 07:31:43",
		country_name: "Singapore"
	}
}
```