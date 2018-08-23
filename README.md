Musicoin core
===============

To get setup, run `npm install`

Currently, this package assumes IPFS, Geth/Parity, and MongoDB are already running.  

You can start it like this:

`node rest-api/app.js --ipfsHost http://localhost:8080 --web3Host http://localhost:8545`

You can get license details like this:

http://localhost:3000/getLicense/0x92e853935f8588956057ba87866fc6d58c82ba72

or stream a media file like this:

http://localhost:3000/media/0x92e853935f8588956057ba87866fc6d58c82ba72

## Releases API

### Get genres

- GET - /release/genres
- QUERY 
	clientId, clientSecret

Response Array:
``` javascript

['Genre name', ...]

```

### Release details

- GET - /release/details/{id};
- PARAMS 
	id - _id of track;
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript

    "success": Boolean,
    "data": {
        "title": String,
        "link": String,
        "pppLink": String,
        "genres": Array,
        "author": String,
        "authorLink": String,
        "trackImg": String,
        "trackDescription": String,
        "directTipCount": Number,
        "directPlayCount": Number
    }

```

### Release random

- GET - /release/random
- QUERY 
	genre - genre for search tracks (optional)
	clientId,clientSecret

Response Object: 
``` javascript

    "success": Boolean,
    "data": {
        "title": String,
        "link": String,
        "pppLink": String,
        "genres": Array,
        "author": String,
        "authorLink": String,
        "trackImg": String,
        "trackDescription": String,
        "directTipCount": Number,
        "directPlayCount": Number
    }

```

## Artist API


### getNewArtists()
- GET - /artist/new
- PARAMS 
	id - id of artist
- QUERY 
	clientId,clientSecret
	limit - Number limit of query instances (optional)

Response Object: 
``` javascript
{
    "success": Boolean,
    "data": [
		{
			"name": String,
            "joinDate": String,
            "profileLink": String
		}
		...
    ]
}
```

### getArtistInfo()

- GET - /artist/info/{id}
- PARAMS 
	id - id of artist
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
    "totalTips": Number,
    "totalFollowers": Number,
    "totalReleases": Number,
    "totalPlays": Number
}
```
### getArtistPlays()

- GET - /artist/totalplays/{id}
- PARAMS 
	id - id of artist
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
    "success": Boolean,
    "playsCount": Number
}
```
### getArtisttips()

- GET - /artist/totaltips/{id}
- PARAMS 
	id - id of artist
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
    "success": Boolean,
    "tipsCount": Number
}
```
### isArtist()

Checks if current user is artist or not;

- GET - /artist/isartist
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
	"success":Boolean
}
```

### isArtistVerified()
- GET - /artist/isverified
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
	"success":Boolean
}
```
### getArtistEarnings()

- GET - /artist/earnings/{id}
- PARAMS
	id - artist _id
- QUERY 
	clientId,clientSecret

Response Object: 
``` javascript
{
    "success": Boolean,
    "tipCount": Number,
    "playCount": Number,
    "earned": Number
}
```
