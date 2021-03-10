# Show Single User

Show a single User if current User has access permissions to it.

**URL** : `/api/user/{user_id}/`

**URL Parameters** : `user_id=[integer]` where `user_id` is the ID of the User on the
server.

**Method** : `GET`

**Auth required** : NO

**Data**: `{}`

## Success Response

**Condition** : If Account exists and Authorized User has required permissions.

**Code** : `200 OK`

**Content example**

```json
{
    "success": "true",
    "message": "Success to show user",
    "data": {
        "user_id": 2,
        "name": "Robertus",
        "position": "Manager",
        "status": "inactive"
    }
}
```

## Error Responses

**Condition** : If Account does not exist with `id` of provided `user_id` parameter.

**Code** : `404 NOT FOUND`

**Content**
```json {
    {
        "success": "false",
        "message": "No Such User"
    }
}
```