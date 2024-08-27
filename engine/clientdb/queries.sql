-- name: InsertSpan :one
INSERT INTO spans (
    trace_id, span_id, trace_state, parent_span_id, flags, name, kind, start_time, end_time, attributes, dropped_attributes_count, events, dropped_events_count, links, dropped_links_count, status_code, status_message, instrumentation_scope, resource
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
) RETURNING id;

-- name: InsertLog :one
INSERT INTO logs (
    trace_id, span_id, timestamp, severity, body, attributes
) VALUES (
    ?, ?, ?, ?, ?, ?
) RETURNING id;

-- -- name: InsertMetric :one
-- INSERT INTO metrics (
--     name, description, unit, type, timestamp, data_points
-- ) VALUES (
--     ?, ?, ?, ?, ?, ?
-- ) RETURNING id;

-- name: SelectSpansSince :many
SELECT * FROM spans WHERE id > ? ORDER BY id ASC LIMIT ?;

-- name: SelectLogsSince :many
SELECT * FROM logs WHERE id > ? ORDER BY id ASC LIMIT ?;