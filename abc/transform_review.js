t.Source("source", source, "/.*review/")
    .Transform(goja({"filename": "/abc/duplicate_id.js"}))
    .Save("sink", sink, "review")
