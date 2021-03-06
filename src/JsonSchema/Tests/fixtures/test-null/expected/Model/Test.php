<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * @var null
     */
    protected $onlyNull;
    /**
     * @var string|null
     */
    protected $nullOrString;

    public function getOnlyNull()
    {
        return $this->onlyNull;
    }

    /**
     * @param null $onlyNull
     *
     * @return self
     */
    public function setOnlyNull($onlyNull): self
    {
        $this->onlyNull = $onlyNull;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNullOrString(): ?string
    {
        return $this->nullOrString;
    }

    /**
     * @param string|null $nullOrString
     *
     * @return self
     */
    public function setNullOrString(?string $nullOrString): self
    {
        $this->nullOrString = $nullOrString;

        return $this;
    }
}
