# Update User

Update the User of the Authenticated User if and only if they are Owner.

**URL** : `/api/user/{user_id}/`

**Method** : `PUT`

**Auth required** : NO

**Data example**

```json
{
    "name": "Robertu",
    "position": "HR",
    "status": "active"
}
```

## Success Responses

**Condition** : Update can be performed without authentication

**Code** : `200 OK`

**Content example** : For the example above, when the 'name' is updated and
posted to `/api/user/2/`...

```json
{
    "success": "true",
    "message": "Success update user",
    "data": {
        "user_id": 2,
        "name": "Robertus",
        "status": "inactive",
        "position": "Manager",
        "email": null,
        "email_verified_at": null,
        "password": null,
        "remember_token": null,
        "created_at": "2021-03-10T06:39:36.000000Z",
        "updated_at": "2021-03-10T08:33:41.000000Z"
    }
}
```

