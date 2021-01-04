# Backends

```vcl
backend backend1 {
    .host = "127.0.0.1";
    .port = "7777";
}

backend backend2 {
    .host = "127.0.0.1";
    .port = "7778";
}

sub vcl_init {
    new director = directors.round_robin();
    director.add_backend(backend1);
    director.add_backend(backend2);
}

sub vcl_recv {
    set req.backend_hint = director.backend();
}
```
