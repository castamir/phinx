<?php
/**
 * Phinx
 *
 * (The MIT license)
 * Copyright (c) 2015 Rob Morgan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated * documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @package    Phinx
 * @subpackage Phinx\Migration
 */
namespace Phinx\Migration;

use Phinx\Db\Adapter\AdapterInterface;
use Phinx\Db\Table;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Migration interface
 *
 * @author Rob Morgan <robbym@gmail.com>
 */
interface MigrationInterface
{
    /**
     * @var string
     */
    const CHANGE = 'change';

    /**
     * @var string
     */
    const UP = 'up';

    /**
     * @var string
     */
    const DOWN = 'down';

    /**
     * Migrate Up
     *
     * @return void
     */
    public function up();

    /**
     * Migrate Down
     *
     * @return void
     */
    public function down();

    /**
     * Sets the database adapter.
     *
     * @param AdapterInterface $adapter Database Adapter
     * @return MigrationInterface
     */
    public function setAdapter(AdapterInterface $adapter);

    /**
     * Gets the database adapter.
     *
     * @return AdapterInterface
     */
    public function getAdapter();

    /**
     * Sets the output object to be used in migration object
     *
     * @param OutputInterface $output
     * @return MigrationInterface
     */
    public function setOutput(OutputInterface $output);

    /**
     * Gets the output object to be used in migration object
     *
     * @return OutputInterface
     */
    public function getOutput();

    /**
     * Gets the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the migration version number.
     *
     * @param float $version Version
     * @return MigrationInterface
     */
    public function setVersion($version);

    /**
     * Gets the migration version number.
     *
     * @return float
     */
    public function getVersion();


}
