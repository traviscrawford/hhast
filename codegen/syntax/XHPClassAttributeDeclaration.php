<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<a9a0fccd2e8a4cf4bd4bdd31296171c8>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class XHPClassAttributeDeclaration extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_attributes;
  private EditableSyntax $_semicolon;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $attributes,
    EditableSyntax $semicolon,
  ) {
    parent::__construct('xhp_class_attribute_declaration');
    $this->_keyword = $keyword;
    $this->_attributes = $attributes;
    $this->_semicolon = $semicolon;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['xhp_attribute_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $attributes = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['xhp_attribute_attributes'],
      $position,
      $source,
    );
    $position += $attributes->width();
    $semicolon = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['xhp_attribute_semicolon'],
      $position,
      $source,
    );
    $position += $semicolon->width();
    return new self($keyword, $attributes, $semicolon);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'attributes' => $this->_attributes;
    yield 'semicolon' => $this->_semicolon;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $attributes = $this->_attributes->rewrite($rewriter, $parents);
    $semicolon = $this->_semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $attributes === $this->_attributes &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new self($keyword, $attributes, $semicolon);
  }

  public function keyword(): AttributeToken {
    return $this->keywordx();
  }

  public function keywordx(): AttributeToken {
    return TypeAssert::isInstanceOf(AttributeToken::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self($value, $this->_attributes, $this->_semicolon);
  }

  public function attributes(): EditableList {
    return $this->attributesx();
  }

  public function attributesx(): EditableList {
    return TypeAssert::isInstanceOf(EditableList::class, $this->_attributes);
  }

  public function raw_attributes(): EditableSyntax {
    return $this->_attributes;
  }

  public function with_attributes(EditableSyntax $value): this {
    if ($value === $this->_attributes) {
      return $this;
    }
    return new self($this->_keyword, $value, $this->_semicolon);
  }

  public function semicolon(): SemicolonToken {
    return $this->semicolonx();
  }

  public function semicolonx(): SemicolonToken {
    return TypeAssert::isInstanceOf(SemicolonToken::class, $this->_semicolon);
  }

  public function raw_semicolon(): EditableSyntax {
    return $this->_semicolon;
  }

  public function with_semicolon(EditableSyntax $value): this {
    if ($value === $this->_semicolon) {
      return $this;
    }
    return new self($this->_keyword, $this->_attributes, $value);
  }
}