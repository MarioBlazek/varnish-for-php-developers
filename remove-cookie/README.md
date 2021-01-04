# Removing cookies

```vcl
set req.http.Cookie = regsuball(req.http.Cookie, "MyVarnishCookie=Aloha");
```
