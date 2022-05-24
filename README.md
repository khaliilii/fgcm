# fgcm:: Firebase Google Cloud Messaging
#### Firebase Google Cloud Messaging :: Mohsen Khalili

## how to install
### step1

#### composer require khaliilii/fgcm

### step2

#### if use laravel 5.1 to 5.5

#### add this line on config\app.php => providers
 
#### Khaliilii\Fgcm\Providers\FgcmServiceProvider::class,

#### and add this line on config\app.php => aliases
```
   'FgcmFacade' => Khaliilii\Fgcm\Facade\FgcmFacade::class,
````

### step3

#### add .env file
```
FCM_SERVER_KEY=****************** line on 
```
#### replace on **** charecter your firebase cloud messaging server key


## how use
```
 FgcmFacade::sendPushNotification($token,'test title','message body text');
 ```
 ## response
```

 "{
"multicast_id":5886777060155138643,
"success":1,
"failure":0,
"canonical_ids":0,
"results":[{"message_id":"0:1543445961541593%df7ddc0fdf7ddc0f"}]}"
```
