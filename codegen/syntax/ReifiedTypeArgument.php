<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<9eda7f9d1d481cc100accb776a109872>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ReifiedTypeArgument extends EditableNode {

  private EditableNode $_reified;
  private EditableNode $_type;

  public function __construct(EditableNode $reified, EditableNode $type) {
    parent::__construct('reified_type_argument');
    $this->_reified = $reified;
    $this->_type = $type;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $reified = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['reified_type_argument_reified'],
      $file,
      $offset,
      $source,
    );
    $offset += $reified->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['reified_type_argument_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($reified, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'reified' => $this->_reified,
      'type' => $this->_type,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $reified = $this->_reified->rewrite($rewriter, $parents);
    $type = $this->_type->rewrite($rewriter, $parents);
    if ($reified === $this->_reified && $type === $this->_type) {
      return $this;
    }
    return new static($reified, $type);
  }

  public function getReifiedUNTYPED(): EditableNode {
    return $this->_reified;
  }

  public function withReified(EditableNode $value): this {
    if ($value === $this->_reified) {
      return $this;
    }
    return new static($value, $this->_type);
  }

  public function hasReified(): bool {
    return !$this->_reified->isMissing();
  }

  /**
   * @returns unknown
   */
  public function getReified(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->_reified);
  }

  /**
   * @returns unknown
   */
  public function getReifiedx(): EditableNode {
    return $this->getReified();
  }

  public function getTypeUNTYPED(): EditableNode {
    return $this->_type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new static($this->_reified, $value);
  }

  public function hasType(): bool {
    return !$this->_type->isMissing();
  }

  /**
   * @returns unknown
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->_type);
  }

  /**
   * @returns unknown
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
