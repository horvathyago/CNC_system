<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MateriaPrimaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MateriaPrimaTable Test Case
 */
class MateriaPrimaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MateriaPrimaTable
     */
    protected $MateriaPrima;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.MateriaPrima',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MateriaPrima') ? [] : ['className' => MateriaPrimaTable::class];
        $this->MateriaPrima = $this->getTableLocator()->get('MateriaPrima', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MateriaPrima);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\MateriaPrimaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\MateriaPrimaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
