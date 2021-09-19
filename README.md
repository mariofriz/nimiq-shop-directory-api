# Nimiq Shop Directory API

**This is a super early first draft.**

## Available APIs

This is the current list of available APIs:

-   `/api/shops`: get a list of shops
    -   supports pagination using `?page=2`
-   `/api/shops/{id}`: show a single shop

## Shop Model

The shop has following attributes:

-   id: unique identifier (currently just an autoincrement integer)
-   name: name of the shop
-   type: online,bricknmortar or both
-   website: link to website
-   phone: phone number
-   shippingCountries: free text for shipping countries
-   street
-   state
-   city
-   postcode
-   latitude
-   longitude
