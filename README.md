Please save an API key for testing in PlaceController.php file, it require Card details, so that i can not share this key publicly. Thank you.

API Documentation:

SignUp
Method: POST
EndPoint: http://127.0.0.1:8000/api/signup
Object:
{
"name": "admin",
"email": "admin@admin.com",
"password": "123456"
}

login
Method: POST
EndPoint: http://127.0.0.1:8000/api/login
Object:
{
"name": "admin",
"email": "admin@admin.com",
"password": "123456"
}

Search Places
Method: GET
EndPoint: http://127.0.0.1:8000/api/places?lat=37.7749&long=-122.4194
Sample Response:

{
"places": [
{
"name": "Restaurant A",
"address": "123 Main Street, City",
"latitude": 37.1234,
"longitude": -122.5678,
"category": "Restaurant"
},
{
"name": "Park B",
"address": "456 Park Avenue, City",
"latitude": 37.5678,
"longitude": -122.9012,
"category": "Park"
},
{
"name": "Cafe C",
"address": "789 Cafe Street, City",
"latitude": 37.9012,
"longitude": -122.3456,
"category": "Cafe"
}
]
}
