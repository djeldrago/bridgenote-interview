# Create User's Account

Create a new user

**URL** : `/api/user/store`

**Method** : `POST`

**Auth required** : NO

**Permissions required** : None

**Data example** All fields must be sent.

```json
{
    "name": "Robert",
    "position": "HR",
    "status": "active"
}
```

## Success Response

**Condition** : If everything is OK.

**Code** : `201 CREATED`

**Content example**

```json
{
    "success": true,
    "message": "Success to add new user",
    "data": {
        "name": "Robert",
        "status": "active",
        "position": "Manager",
        "updated_at": "2021-03-10T06:39:36.000000Z",
        "created_at": "2021-03-10T06:39:36.000000Z",
        "user_id": 2
    }
}
```

### Or

**Condition** : If fields are missed.

**Code** : `400 BAD REQUEST`

**Content example**

```json
{
    "name": [
        "This field is required."
    ]
}
```
