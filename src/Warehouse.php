<?php

namespace test\src;

use Exception;

class Warehouse extends Office
{
    private ?int $ids;
    private ?string $names;
    private ?string $type;
    private ?StrategyInterface $strategy;

    /**
     * @throws Exception
     */
    public function __construct(StrategyInterface $strategy = null)
    {
        if (isset($this->strategy)) {
            throw new Exception("Contract is already present.");
        }
        $this->strategy = $strategy;
    }

    /**
     * @return int|null
     */
    public function getIds(): ?int
    {
        return $this->ids;
    }

    /**
     * @param int|null $ids
     */
    public function setIds(?int $ids): void
    {
        $this->ids = $ids;
    }

    /**
     * @return string|null
     */
    public function getNames(): ?string
    {
        return $this->names;
    }

    /**
     * @param string|null $names
     */
    public function setNames(?string $names): void
    {
        $this->names = $names;
    }

    /**
     * @param StrategyInterface|null $strategy
     */
    public function setStrategy(?StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int|null
     */
    public function getOfficeId(): ?int
    {
        return $this->getId();
    }

    /**
     * @param int|null $office_id
     */
    public function setOfficeId(?int $office_id): void
    {
        $this->setId($office_id);
    }

    /**
     * Call strategy calculation() method.
     */
    public function calculation(int $quantity): int
    {
        return $this->strategy->calculation($quantity);
    }
}