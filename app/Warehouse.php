<?php

namespace test\app;

use Exception;

class Warehouse
{
    private ?int $id;
    private ?string $name;
    private ?string $type;
    private ?int $office_id;
    private $strategy;

    /**
     * @throws Exception
     */
    public function __construct(StrategyInterface $strategy = null, ?int $id = null, ?string $name = null, ?string $type = null, ?int $office_id = null)
    {
        if (isset($this->strategy)) {
            throw new Exception("Contract is already present.");
        }
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->office_id = $office_id;
        $this->strategy = $strategy;
    }

    /**
     * @return StrategyInterface|null
     */
    public function getStrategy(): ?StrategyInterface
    {
        return $this->strategy;
    }

    /**
     * @param StrategyInterface|null $strategy
     */
    public function setStrategy(?StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
        return $this->office_id;
    }

    /**
     * @param int|null $office_id
     */
    public function setOfficeId(?int $office_id): void
    {
        $this->office_id = $office_id;
    }

    /**
     * Call strategy handle() method.
     */
    public function rasschet(int $quantity): int
    {
        return $this->strategy->rasschet($quantity);
    }
}