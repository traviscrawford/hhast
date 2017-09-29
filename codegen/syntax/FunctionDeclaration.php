<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<414e2a2421fcb74ac48838daacf98497>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class FunctionDeclaration extends EditableNode
  implements IFunctionishDeclaration {

  private EditableNode $_attribute_spec;
  private EditableNode $_declaration_header;
  private EditableNode $_body;

  public function __construct(
    EditableNode $attribute_spec,
    EditableNode $declaration_header,
    EditableNode $body,
  ) {
    parent::__construct('function_declaration');
    $this->_attribute_spec = $attribute_spec;
    $this->_declaration_header = $declaration_header;
    $this->_body = $body;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $declaration_header = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_declaration_header'],
      $file,
      $offset,
      $source,
    );
    $offset += $declaration_header->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new self($attribute_spec, $declaration_header, $body);
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableNode> {
    return dict[
      'attribute_spec' => $this->_attribute_spec,
      'declaration_header' => $this->_declaration_header,
      'body' => $this->_body,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $attribute_spec = $this->_attribute_spec->rewrite($rewriter, $parents);
    $declaration_header =
      $this->_declaration_header->rewrite($rewriter, $parents);
    $body = $this->_body->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->_attribute_spec &&
      $declaration_header === $this->_declaration_header &&
      $body === $this->_body
    ) {
      return $this;
    }
    return new self($attribute_spec, $declaration_header, $body);
  }

  public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->_attribute_spec;
  }

  public function withAttributeSpec(EditableNode $value): this {
    if ($value === $this->_attribute_spec) {
      return $this;
    }
    return new self($value, $this->_declaration_header, $this->_body);
  }

  public function hasAttributeSpec(): bool {
    return !$this->_attribute_spec->isMissing();
  }

  /**
   * @returns Missing | AttributeSpecification
   */
  public function getAttributeSpec(): ?AttributeSpecification {
    if ($this->_attribute_spec->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->_attribute_spec,
    );
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributeSpecx(): AttributeSpecification {
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->_attribute_spec,
    );
  }

  public function getDeclarationHeaderUNTYPED(): EditableNode {
    return $this->_declaration_header;
  }

  public function withDeclarationHeader(EditableNode $value): this {
    if ($value === $this->_declaration_header) {
      return $this;
    }
    return new self($this->_attribute_spec, $value, $this->_body);
  }

  public function hasDeclarationHeader(): bool {
    return !$this->_declaration_header->isMissing();
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getDeclarationHeader(): FunctionDeclarationHeader {
    return TypeAssert\instance_of(
      FunctionDeclarationHeader::class,
      $this->_declaration_header,
    );
  }

  public function getBodyUNTYPED(): EditableNode {
    return $this->_body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->_body) {
      return $this;
    }
    return new self($this->_attribute_spec, $this->_declaration_header, $value);
  }

  public function hasBody(): bool {
    return !$this->_body->isMissing();
  }

  /**
   * @returns CompoundStatement | SemicolonToken
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->_body);
  }
}
