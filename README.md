# Link collector endpoint

## What it is
 
An endpoint to get a list of links present in the target url. Currently the endpoint is located at:
```
http://127.0.0.1:8000/posturl/{www.yoururl.com}
```

This will return the url and links within it in Json format.

## Next steps

The next immediate step for the link collector MVP would be to build a template with Twig for the UI that would use the 
endpoint and display the results for the user. This would include organizing, formatting, etc.

Simple caching could also be included for the requested functionality of preserving previous searches, to later be 
replaced with a database.
