# Show All Users

Show all Users 

**URL** : `/api/users/`

**Method** : `GET`

**Auth required** : YES

**Permissions required** : None

**Data constraints** : `{}`

## Success Responses

**Condition** : User can not see any Users.

**Code** : `200 OK`

**Content** : `{[]}`

### OR

**Condition** : User can see one or more Users.

**Code** : `200 OK`


```json
[
    {
        "success": "true",
        "message": "Success load Users",
        "data": [
            {
                "user_id": 1,
                "name": "Muhammad Ramdhan Syakirin",
                "status": null,
                "position": null
            },
            {
                "user_id": 2,
                "name": "Robertus",
                "status": "inactive",
                "position": "Manager"
            }
        ]
    }
]
```
