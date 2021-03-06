<?php

namespace App\Repository\Query;

/**
 * Tasks Query.
 */
abstract class TaskQuery
{
    const GET_TASK_QUERY = 'SELECT * FROM tasks WHERE id=:id';
    const GET_TASKS_QUERY = 'SELECT * FROM tasks ORDER BY id';
    const SEARCH_TASKS_QUERY = 'SELECT * FROM tasks WHERE UPPER(name) LIKE :name ORDER BY id';
    const CREATE_TASK_QUERY = 'INSERT INTO tasks (name, status) VALUES (:name, :status)';
    const UPDATE_TASK_QUERY = 'UPDATE tasks SET name=:name, status=:status WHERE id=:id';
    const DELETE_TASK_QUERY = 'DELETE FROM tasks WHERE id=:id';
}
