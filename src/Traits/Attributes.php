<?php

namespace Rmunate\SqlServerLite\Traits;

use PDO;

trait Attributes
{
    /**
     * Set the query timeout for the PDO connection.
     *
     * @param int $seconds The timeout value in seconds.
     *
     * @return $this Returns the current instance of the object.
     */
    public function setTimeOut(int $seconds = 0)
    {
        $this->PDO->setAttribute(PDO::SQLSRV_ATTR_QUERY_TIMEOUT, $seconds);

        return $this;
    }

    /**
     * Set the error mode for the PDO connection.
     *
     * @param string $mode The error mode to set ("silent", "warning", or "exception").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setErrorMode(string $mode)
    {
        $validModes = ['silent', 'warning', 'exception'];
        $mode = strtolower($mode);

        if (!in_array($mode, $validModes)) {
            $mode = 'exception';
        }

        $this->PDO->setAttribute(PDO::ATTR_ERRMODE, constant('PDO::ERRMODE_'.strtoupper($mode)));

        return $this;
    }

    /**
     * Set the SQL Server attribute dynamically based on the provided case.
     *
     * @param string $case The case to set ("binary", "utf8", "system", or "default").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setEncoding(string $case)
    {
        $validCases = ['binary', 'utf8', 'system', 'default'];
        $case = strtolower($case);

        if (!in_array($case, $validCases)) {
            $case = 'utf8';
        }

        $this->PDO->setAttribute(PDO::SQLSRV_ATTR_ENCODING, constant('PDO::SQLSRV_ENCODING_'.strtoupper($case)));

        return $this;
    }

    /**
     * Enable NOCOUNT mode for the PDO connection.
     *
     * @return $this Returns the current instance of the object.
     */
    public function setDirectQuery()
    {
        $this->PDO->setAttribute(PDO::SQLSRV_ATTR_DIRECT_QUERY, true);

        return $this;
    }

    /**
     * Set the ANSI_NULLS option for the PDO connection.
     *
     * @param string $value The value to set for the ANSI_NULLS option ("ON" or "OFF").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setAnsiNulls(string $value = 'ON')
    {
        $value = strtoupper($value);

        if ($value === 'ON' || $value === 'OFF') {
            $this->PDO->exec("SET ANSI_NULLS $value");
        }

        return $this;
    }

    /**
     * Set the ANSI_PADDING option for the PDO connection.
     *
     * @param string $value The value to set for the ANSI_PADDING option ("ON" or "OFF").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setAnsiPadding(string $value = 'ON')
    {
        $value = strtoupper($value);

        if ($value === 'ON' || $value === 'OFF') {
            $this->PDO->exec("SET ANSI_PADDING $value");
        }

        return $this;
    }

    /**
     * Set the ANSI_WARNINGS option for the PDO connection.
     *
     * @param string $value The value to set for the ANSI_WARNINGS option ("ON" or "OFF").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setAnsiWarnings(string $value = 'ON')
    {
        $value = strtoupper($value);

        if ($value === 'ON' || $value === 'OFF') {
            $this->PDO->exec("SET ANSI_WARNINGS $value");
        }

        return $this;
    }

    /**
     * Set the ARITHABORT option for the PDO connection.
     *
     * @param string $value The value to set for the ARITHABORT option ("ON" or "OFF").
     *
     * @return $this Returns the current instance of the object.
     */
    public function setArithAbort(string $value = 'ON')
    {
        $value = strtoupper($value);

        if ($value === 'ON' || $value === 'OFF') {
            $this->PDO->exec("SET ARITHABORT $value");
        }

        return $this;
    }
}
