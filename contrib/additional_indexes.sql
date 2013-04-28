-- Index the content field, improves summary queries
CREATE INDEX msgs_idx_content ON msgs (content);
