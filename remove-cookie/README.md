# Removing cookies

```
set req.http.Cookie = regsuball(req.http.Cookie, "MyVarnishCookie=Aloha");
```
