t.Source("source", source, "/.*book/")
    .Transform(goja({"filename": "/abc/duplicate_id.js"}))
    .Save("sink", sink, "book")
