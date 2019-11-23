function transform(doc) {
    doc["data"]["_id"] = doc["data"]["id"];
    return doc
}