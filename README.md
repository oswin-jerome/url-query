# url-query
Install
```
composer require ideaux/url-query
```

User traits
```
use Ideaux\UrlQuery\Traits\HasSearchable;
```
```
class User extends Model{
  use HasSearchable;


```

Urls
`users?name=Joe`
