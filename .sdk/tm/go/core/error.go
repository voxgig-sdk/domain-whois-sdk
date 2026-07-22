package core

type DomainWhoisError struct {
	IsDomainWhoisError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewDomainWhoisError(code string, msg string, ctx *Context) *DomainWhoisError {
	return &DomainWhoisError{
		IsDomainWhoisError: true,
		Sdk:              "DomainWhois",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *DomainWhoisError) Error() string {
	return e.Msg
}
