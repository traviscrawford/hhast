<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b9beae674fecdf67892793b30a872e4a>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class NamespaceDeclaration extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_name;
  private EditableSyntax $_body;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $name,
    EditableSyntax $body,
  ) {
    parent::__construct('namespace_declaration');
    $this->_keyword = $keyword;
    $this->_name = $name;
    $this->_body = $body;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $name = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_name'],
      $position,
      $source,
    );
    $position += $name->width();
    $body = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_body'],
      $position,
      $source,
    );
    $position += $body->width();
    return new self($keyword, $name, $body);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'name' => $this->_name;
    yield 'body' => $this->_body;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $name = $this->_name->rewrite($rewriter, $parents);
    $body = $this->_body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $name === $this->_name &&
      $body === $this->_body
    ) {
      return $this;
    }
    return new self($keyword, $name, $body);
  }

  public function keyword(): NamespaceToken {
    return $this->keywordx();
  }

  public function keywordx(): NamespaceToken {
    return TypeAssert::isInstanceOf(NamespaceToken::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self($value, $this->_name, $this->_body);
  }

  public function name(): EditableSyntax {
    return $this->namex();
  }

  public function namex(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_name);
  }

  public function raw_name(): EditableSyntax {
    return $this->_name;
  }

  public function with_name(EditableSyntax $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new self($this->_keyword, $value, $this->_body);
  }

  public function body(): EditableSyntax {
    return $this->bodyx();
  }

  public function bodyx(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_body);
  }

  public function raw_body(): EditableSyntax {
    return $this->_body;
  }

  public function with_body(EditableSyntax $value): this {
    if ($value === $this->_body) {
      return $this;
    }
    return new self($this->_keyword, $this->_name, $value);
  }
}