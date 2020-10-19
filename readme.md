1.Describe possible performance optimizations for your Code.

Using redis to cache models instead of quering every time would give the biggest performance optimization. Which also means that the user object and id would be stored in cache and fetched from there when inserting a new item that belongs to user. 



2.Which things could be done better, than you’ve done it?
Due to the lack of time, i didn't do:
 - proper error handling and validation
 - unit tests
 - the front-end needs more structure

3. why MVP
Any Pattern would have worked, I wanted to make the code as readable as possible, and i wanted to make the front-end as dumb as possible, thats why the controllers are only responsible for redirecting, where as views display the data and models are processing the data. Services were added to handle api calls, and processes that depend on many entities.  
