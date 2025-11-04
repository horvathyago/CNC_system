<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstoqueMateriaPrimaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstoqueMateriaPrimaTable Test Case
 */
class EstoqueMateriaPrimaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstoqueMateriaPrimaTable
     */
    protected $EstoqueMateriaPrima;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.EstoqueMateriaPrima',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EstoqueMateriaPrima') ? [] : ['className' => EstoqueMateriaPrimaTable::class];
        $this->EstoqueMateriaPrima = $this->getTableLocator()->get('EstoqueMateriaPrima', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EstoqueMateriaPrima);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\EstoqueMateriaPrimaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\EstoqueMateriaPrimaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
