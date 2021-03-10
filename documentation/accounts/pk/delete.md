# Delete User's Account

Delete a specific user

**URL** : `/api/user/{user_id}/`

**URL Parameters** : `user_id=[integer]` where `user_id` is the ID of the Account in the
database.

**Method** : `DELETE`

**Auth required** : NO

**Data** : `{}`

## Success Response

**Condition** : If the Account exists.

**Code** : `201`

**Content** :

```json {
    {
        "success": "true",
        "message": "Success deleting user"
    }
}
```