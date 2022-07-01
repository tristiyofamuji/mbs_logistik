<?php
function ci_insert($table, $data)
{
  $ci = get_instance();
  return $ci->db->insert($table, $data);
}

function ci_delete($table, $where)
{
  $ci = get_instance();
  return $ci->db->delete($table, $where);
}

function ci_update($table, $data, $where)
{
  $ci = get_instance();
  return $ci->db->update($table, $data, $where);
}

function ci_get($table)
{
  $ci = get_instance();
  return $ci->db->get($table);
}

function ci_get_where($table, $where)
{
  $ci = get_instance();
  return $ci->db->get_where($table, $where);
}
