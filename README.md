# API Spec

## Authentication

All API must use this authentication

Request :
- Header :
    - Bearer Token : "your token"

## Create Student

Request :
- Method : POST
- Endpoint : `/api/student`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "nama" : "string",
    "alamat" : "string",
    "no_telepon" : "integer"
}
```

Response :

```json 
{
    "message" : "string",
    "data" : {
         "id" : "integer, unique",
         "nama" : "string",
         "alamat" : "string",
         "no_telepon" : "integer",
         "createdAt" : "datetime",
         "updatedAt" : "datetime"
     }
}
```

## Get Student

Request :
- Method : GET
- Endpoint : `/api/student/{student_id}`
- Header :
    - Accept: application/json

Response :

```json 
{
    "message" : "string",
    "data" : {
         "id" : "integer, unique",
         "nama" : "string",
         "alamat" : "string",
         "no_telepon" : "integer",
         "createdAt" : "datetime",
         "updatedAt" : "datetime"
     }
}
```

## Update Student

Request :
- Method : PUT
- Endpoint : `/api/products/{student_id}`
- Header :
    - Content-Type: application/json
    - Accept: application/json
- Body :

```json 
{
    "nama" : "string",
    "alamat" : "string",
    "no_telepon" : "integer"
}
```

Response :

```json 
{
    "message" : "string",
    "data" : {
         "id" : "integer, unique",
         "nama" : "string",
         "alamat" : "string",
         "no_telepon" : "integer",
         "createdAt" : "datetime",
         "updatedAt" : "datetime"
     }
}
```

## List Students

Request :
- Method : GET
- Endpoint : `/api/student`
- Header :
    - Accept: application/json

Response :

```json 
{
    "message" : "string",
    "data" : [
        {
             "id" : "id, unique",
             "nama" : "string",
             "alamat" : "string",
             "no_telepon" : "integer",
             "createdAt" : "datetime",
             "updatedAt" : "datetime"
        },
        {
             "id" : "id, unique",
             "nama" : "string",
             "alamat" : "string",
             "no_telepon" : "integer",
             "createdAt" : "datetime",
             "updatedAt" : "datetime"
        }
    ]
}
```

## Delete Student

Request :
- Method : DELETE
- Endpoint : `/api/student/{student_id}`
- Header :
    - Accept: application/json

Response :

```json 
{
    "message" : "string"
}
```