<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<c7001776200698402b936a80464205b9>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class NamespaceUseDeclaration extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_kind;
  private EditableSyntax $_clauses;
  private EditableSyntax $_semicolon;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $kind,
    EditableSyntax $clauses,
    EditableSyntax $semicolon,
  ) {
    parent::__construct('namespace_use_declaration');
    $this->_keyword = $keyword;
    $this->_kind = $kind;
    $this->_clauses = $clauses;
    $this->_semicolon = $semicolon;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_use_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $kind = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_use_kind'],
      $position,
      $source,
    );
    $position += $kind->width();
    $clauses = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_use_clauses'],
      $position,
      $source,
    );
    $position += $clauses->width();
    $semicolon = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['namespace_use_semicolon'],
      $position,
      $source,
    );
    $position += $semicolon->width();
    return new self($keyword, $kind, $clauses, $semicolon);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'kind' => $this->_kind;
    yield 'clauses' => $this->_clauses;
    yield 'semicolon' => $this->_semicolon;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $kind = $this->_kind->rewrite($rewriter, $parents);
    $clauses = $this->_clauses->rewrite($rewriter, $parents);
    $semicolon = $this->_semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $kind === $this->_kind &&
      $clauses === $this->_clauses &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new self($keyword, $kind, $clauses, $semicolon);
  }

  public function keyword(): UseToken {
    return $this->keywordx();
  }

  public function keywordx(): UseToken {
    return TypeAssert::isInstanceOf(UseToken::class, $this->_keyword);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self($value, $this->_kind, $this->_clauses, $this->_semicolon);
  }

  public function kind(): EditableSyntax {
    return $this->kindx();
  }

  public function kindx(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_kind);
  }

  public function raw_kind(): EditableSyntax {
    return $this->_kind;
  }

  public function with_kind(EditableSyntax $value): this {
    if ($value === $this->_kind) {
      return $this;
    }
    return new self($this->_keyword, $value, $this->_clauses, $this->_semicolon);
  }

  public function clauses(): EditableList {
    return $this->clausesx();
  }

  public function clausesx(): EditableList {
    return TypeAssert::isInstanceOf(EditableList::class, $this->_clauses);
  }

  public function raw_clauses(): EditableSyntax {
    return $this->_clauses;
  }

  public function with_clauses(EditableSyntax $value): this {
    if ($value === $this->_clauses) {
      return $this;
    }
    return new self($this->_keyword, $this->_kind, $value, $this->_semicolon);
  }

  public function semicolon(): ?SemicolonToken {
    return $this->_semicolon->is_missing() ? null : TypeAssert::isInstanceOf(SemicolonToken::class, $this->_semicolon);
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
    return new self($this->_keyword, $this->_kind, $this->_clauses, $value);
  }
}