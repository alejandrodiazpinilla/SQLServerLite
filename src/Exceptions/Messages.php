<?php

namespace Rmunate\SqlServerLite\Exceptions;

class Messages
{
    public const MANUAL_URL = 'https://github.com/rmunate/SQLServerLite';
    public const LIBRARY_NAME = 'SQLServerLite';

    /**
     * Generate an exception message for the `methodFlip` method.
     *
     * @return string The exception message.
     */
    public static function methodFlipException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::flip()',
            'It is not possible to apply a ::flip to a multidimensional array. This method is intended to be used after the ::colum() method.'
        );
    }

    /**
     * Returns the exception message for a non-existent key in an array.
     *
     * @param string $key The key that is not present or empty in the array.
     *
     * @return string The formatted exception message.
     */
    public static function nonExistentKeyException($key): string
    {
        return self::formatExceptionMessage(
            'SQLServer::database()',
            "The key [$key] is not present or empty in the array passed."
        );
    }

    /**
     * Returns the exception message for an undefined environment variable.
     *
     * @return string The formatted exception message.
     */
    public static function undefinedEnvironmentVariableException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::env()',
            'The environment variables do not exist or are poorly defined, they must have {PREFIX}_SQLSRV_IDENTIFIER.'
        );
    }

    /**
     * Returns the exception message for working outside of Laravel.
     *
     * @return string The formatted exception message.
     */
    public static function outsideOfLaravel(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::connection()',
            'You are not working on a Laravel application. This method is only functional in that framework.'
        );
    }

    /**
     * Returns the exception message for a non-existent key in Laravel configuration.
     *
     * @param string $key The key that is not present or empty in the Laravel configuration.
     *
     * @return string The formatted exception message.
     */
    public static function nonExistentKeyLaravelException($key): string
    {
        return self::formatExceptionMessage(
            'SQLServer::connection()',
            "The key [$key] is not present or empty in [config/database.php]."
        );
    }

    /**
     * Returns the exception message for an error disabling foreign keys.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function disableForeignKeysException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::disableForeignKeys()',
            $message ?? 'Error disabling foreign keys'
        );
    }

    /**
     * Returns the exception message for an error enabling foreign keys.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function enableForeignKeysException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::enableForeignKeys()',
            $message ?? 'Error enabling foreign keys'
        );
    }

    /**
     * Returns the exception message for a non-SELECT query.
     *
     * @return string The formatted exception message.
     */
    public static function notIsSelectQueryException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::select()',
            'The string sent does not start with SELECT, this is required.'
        );
    }

    /**
     * Returns the exception message for a non-UPDATE query.
     *
     * @return string The formatted exception message.
     */
    public static function notIsUpdateQueryException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::update()',
            'The string sent does not start with UPDATE, this is required.'
        );
    }

    /**
     * Returns the exception message for a non-INSERT query.
     *
     * @return string The formatted exception message.
     */
    public static function notIsInsertQueryException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::insert()',
            'The string sent does not start with INSERT, this is required.'
        );
    }

    /**
     * Returns the exception message for a non-DELETE query.
     *
     * @return string The formatted exception message.
     */
    public static function notIsDeleteQueryException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::delete()',
            'The string sent does not start with DELETE, this is required.'
        );
    }

    /**
     * Returns the exception message for a non-EXEC procedure.
     *
     * @return string The formatted exception message.
     */
    public static function notIsProcedureException(): string
    {
        return self::formatExceptionMessage(
            'SQLServer::executeProcedure/executeTransactionalProcedure()',
            'The string sent does not start with EXEC, this is required.'
        );
    }

    /**
     * Returns the exception message for a SELECT query error.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function selectException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::select()',
            $message ?? 'Error Select Query'
        );
    }

    /**
     * Returns the exception message for an UPDATE query error.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function updateException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::update()',
            $message ?? 'Error Update Sentence'
        );
    }

    /**
     * Returns the exception message for an INSERT query error.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function insertException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::insert()',
            $message ?? 'Error Insert Sentence'
        );
    }

    /**
     * Returns the exception message for a DELETE query error.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function deleteException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::delete()',
            $message ?? 'Error Delete Sentence'
        );
    }

    /**
     * Returns the exception message for a stored procedure execution error.
     *
     * @param string|null $message Additional error message (optional).
     *
     * @return string The formatted exception message.
     */
    public static function executeProcedureException($message = null): string
    {
        return self::formatExceptionMessage(
            'SQLServer::executeProcedure/executeTransactionalProcedure()',
            $message ?? 'Error Store Procedure Sentence'
        );
    }

    /**
     * Formats the exception message.
     *
     * @param string $method  The method that triggered the exception.
     * @param string $message The exception message.
     *
     * @return string The formatted exception message.
     */
    public static function formatExceptionMessage(string $method = '', $message): string
    {
        $formattedMessage = sprintf(
            '%s Exception in the method %s - %s %s',
            self::LIBRARY_NAME,
            $method,
            $message,
            self::MANUAL_URL
        );

        return $formattedMessage;
    }
}
