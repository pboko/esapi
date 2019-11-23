function transform(doc) {
    doc["data"]["_id"] = doc["data"]["id"];
    doc["data"]["common"] = "wtf??";
    return doc;
}