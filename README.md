# Message
minimal session message
## Usage
### 1. Use session on each page where message is work
````php 
session_start();
````
### 2. To create a message:
```php 
Message::make($text, $type);
```
### 3. To display message or type:
```php 
Message::displayMessage();

Message::displayType();
```
### 4. Finally, remove message
```php 
Message::delete();
```