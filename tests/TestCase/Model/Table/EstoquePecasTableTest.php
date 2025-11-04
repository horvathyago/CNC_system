<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstoquePecasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstoquePecasTable Test Case
 */
class EstoquePecasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstoquePecasTable
     */
    protected $EstoquePecas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.EstoquePecas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EstoquePecas') ? [] : ['className' => EstoquePecasTable::class];
        $this->EstoquePecas = $this->getTableLocator()->get('EstoquePecas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EstoquePecas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\EstoquePecasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\EstoquePecasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
